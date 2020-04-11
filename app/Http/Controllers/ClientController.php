<?php

namespace App\Http\Controllers;
use DB;
use App\Models\RealEstate;
use App\Models\Form;
use App\Models\Province;
use App\Models\Direction;
use App\Models\RealEstateTranslation;
use App\Models\StandardAcreage;
use App\Models\Currency;
use App\Models\Evaluate;
use App\Models\Blog;
use App\Models\CookieUser;
use App\Models\ViewProduct;
use App\Models\WishList;
use App\Models\WishListTemp;
use App\Models\Cart;
use App\Models\DetailCart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function list(Request $request)
    {
        // dd(\Session::get('lang', config('app.locale')));
        app()->setLocale(\Session::get('lang', config('app.locale')));
        // \App::setLocale('vi');
        // $content = RealEstateTranslation::getTranslation('vi')->first();
        // dd($content);
        $real_estate = RealEstate::join('translation', 'real_estate.real_estate_id', 'translation.real_estate_id')
            // ->join('image', 'real_estate.real_estate_id', 'image.real_estate_id')
            ->join('district', 'real_estate.district_id', 'district.district_id')
            ->join('province', 'district.province_id', 'province.province_id')
            ->join('unit', 'real_estate.unit_id', 'unit.unit_id')
            ->join('unit_translation', 'unit_translation.unit_id', 'unit.unit_id')
            ->select('real_estate.real_estate_id',
            'real_estate_avatar',
            'translation_name',
            'translation_address',
            'translation_description',
            'real_estate_price',
            'real_estate_acreage',
            'real_estate.created_at',
            'unit_translation.unit_translation_name',
            // 'image.image_path',
            'province.province_name',
            'district.district_name')
            ->where([
                ['translation_locale', \Session::get('lang', config('app.locale'))],
                ['unit_translation_locale', \Session::get('lang', config('app.locale'))], ])
            // ->where('image_real_estate.image_real_estate_note', 'Avatar')
            // ->groupBy('real_estate.real_estate_id')
            ->paginate(6);
        // dd($real_estate);
        // tính thời gian đăng
        Carbon::setlocale('vi');
        $now = Carbon::now();
        foreach ($real_estate as $key => $value) {
            // dd($value['real_estate_id']);
            $day[$value['real_estate_id']] = $value->created_at->diffForHumans(($now));
        }
        // lấy dữ liệu cho search form
        $form = Form::join('form_translation', 'form.form_id', 'form_translation.form_id')
        ->select('form.form_id', 'form_translation_name')
        ->where('form_translation_locale', \Session::get('lang', config('app.locale')))
        ->get();
        $province = Province::select('province_id', 'province_name')->get();

        return view('pages.user.page.list', compact('real_estate', 'day', 'form', 'province'));
    }

    public function searchFullText(Request $request)
    {
        $real_estate = RealEstate::query();
        if ($request->search) {
            $real_estate = $real_estate->FullTextSearch($request->search);
        } else { //lọc
            if ($request->type) {
                $real_estate = $real_estate->where('real_estate.type_id', $request->type);
            }
            if ($request->district) {
                $real_estate = $real_estate->join('district', 'real_estate.district_id', 'district.district_id')
                ->where('real_estate.district_id', $request->district);
            }
            if ($request->ward) {
                $real_estate = $real_estate->join('ward', 'real_estate.ward_id', 'ward.ward_id')
                ->select('ward.ward_name')->where('real_estate.ward_id', $request->ward);
            }
            if ($request->street) {
                $real_estate = $real_estate->join('street', 'real_estate.street_id', 'street.street_id')
                ->select('street.street_name')->where('real_estate.street_id', $request->street);
            }
            if ($request->direction) {
                $real_estate = $real_estate->join('direction', 'real_estate.direction_id', 'direction.direction_id')
                ->select('direction.direction_name')->where('real_estate.direction_id', $request->direction);
            }
            if ($request->acreage) {
                $value_acreage[] = explode(',', $request->acreage);
                $real_estate = $real_estate->whereBetween('real_estate.real_estate_acreage', $value_acreage);
            }
            if ($request->price) {
                $value_price[] = explode(',', $request->price);
                $real_estate = $real_estate->whereBetween('real_estate.real_estate_price_total', $value_price);
            }
        }
        $real_estate = $real_estate
        // ->join('image_real_estate', 'real_estate.real_estate_id', 'image_real_estate.real_estate_id')
        // ->join('image', 'image_real_estate.image_id', 'image.image_id')
        // ->select('real_estate.real_estate_id',
        // 'real_estate_name_vi',
        // 'real_estate_description_vi',
        // 'real_estate_price',
        // 'real_estate_acreage',
        // 'real_estate.created_at',
        // 'image.image_path', )
        // ->paginate(6);
        ->join('image_real_estate', 'real_estate.real_estate_id', 'image_real_estate.real_estate_id')
        ->join('image', 'image_real_estate.image_id', 'image.image_id')
        ->join('district', 'real_estate.district_id', 'district.district_id')
        ->join('province', 'district.province_id', 'province.province_id')
        ->join('unit', 'real_estate.unit_id', 'unit.unit_id')
        ->select('real_estate.real_estate_id',
        'real_estate_name_vi',
        'real_estate_description_vi',
        'real_estate_price',
        'real_estate_acreage',
        'real_estate.created_at',
        'unit.unit_name_vi',
        'image.image_path',
        'province.province_name',
        'district.district_name')
        ->orWhereNotNull('image_real_estate.image_real_estate_note', 'Avatar')
        ->paginate(6);
        // dd($real_estate);
        // tính thời gian đăng
        Carbon::setlocale('vi');
        $now = Carbon::now();
        $day[] = '';
        foreach ($real_estate as $key => $value) {
            // dd($value['real_estate_id']);
            $day[$value['real_estate_id']] = $value->created_at->diffForHumans(($now));
        }

        // lấy dữ liệu cho search form
        $form = Form::select('form_id', 'form_name')->get();
        $province = Province::select('province_id', 'province_name')->get();
        $direction = Direction::select('direction_id', 'direction_name')->get();
        $standard_acreage = StandardAcreage::select('standard_acreage_id', 'standard_acreage_name', 'standard_acreage_value1', 'standard_acreage_value2')->get();

        return redirect('/list')
        ->with('real_estate', $real_estate)
        ->with('day', $day)
        ->with('form', $form)
        ->with('province', $province)
        ->with('direction', $direction)
        ->with('standard_acreage', $standard_acreage);
    }
    public function add_view_product($real_estate_id)
    {
        /*
        thêm vào danh sách đã xem

        tìm xem đã có cookie trong csdl chưa
        tìm trong sp đã xem có cookie đó chưa
        nếu chưa thì tạo
        nếu có rồi thì tìm sp đã xem có sp đó chưa
        */
        
            $view_product=ViewProduct::where('cookie_user_id',\Cookie::get('real_estate'))
            ->first();
            $re_vp=ViewProduct::where('real_estate_id',$real_estate_id)->first();
            if(!$view_product || (!$re_vp&& $view_product)){
                ViewProduct::insert([
                    'real_estate_id'=>$real_estate_id,
                    'cookie_user_id'=>\Cookie::get('real_estate'),
                ]);
            }
        
    }
    public function check_wishlist($real_estate_id)
    {
        $checklogin1=false;
            if(\Auth::guard('account')->check()){

                $checklogin1=\Auth::guard('account')->user()->hasRole('Customer');
            }
            if($checklogin1){
                $check_wishlist=WishList::where([
                    ['customer_id',\Auth::guard('account')->user()->load('customer')->customer->customer_id],
                    ['real_estate_id',$real_estate_id]])->first();
            }
            else{
                $check_wishlist=WishListTemp::where([
                    ['cookie_user_id',\Cookie::get('real_estate')],
                    ['real_estate_id',$real_estate_id]])->first();
            }
            if($check_wishlist){
                $heart=true;
            }
            else{
                $heart=false;
            }
            return $heart;
    }
    public function get_evaluate($request,$real_estate,$real_estate_id)
    {
        //Đánh giá
        
        $evaluate = Evaluate::join('customer', 'evaluate.customer_id', 'customer.customer_id')
        ->select('customer.customer_avatar',
        'customer.customer_name',
        'evaluate.evaluate_rank',
        'evaluate.evaluate_title',
        'evaluate.evaluate_content',
        'evaluate.updated_at'
        )
        ->where('evaluate.real_estate_id', $real_estate->real_estate_id)
        ->get();
        $count_rank = count($evaluate);
        $average_rank = number_format($evaluate->avg('evaluate_rank'), 1);
        $image = RealEstate::join('image', 'real_estate.real_estate_id', 'image.real_estate_id')
        ->select('image.image_path','real_estate.real_estate_avatar')
        ->where('real_estate.real_estate_id', $real_estate->real_estate_id)
        ->get();
        $evaluate = Evaluate::join('customer', 'evaluate.customer_id', 'customer.customer_id')
        ->select('customer.customer_avatar',
        'customer.customer_name',
        'evaluate.evaluate_rank',
        'evaluate.evaluate_title',
        'evaluate.evaluate_content',
        'evaluate.updated_at',
        'evaluate.customer_id'
        )
        ->where('evaluate.real_estate_id', $real_estate->real_estate_id)
        ->get();
        $rank_5 = 0;
        $rank_4 = 0;
        $rank_3 = 0;
        $rank_2 = 0;
        $rank_1 = 0;
        foreach ($evaluate as $item) {
            switch ($item->evaluate_rank) {
                case 5:
                    $rank_5++;
                break;
                case 4:
                    $rank_4++;
                break;
                case 3:
                    $rank_3++;
                break;
                case 2:
                    $rank_2++;
                break;
                case 1:
                    $rank_1++;
                break;
            }
        }
        //bao nhiêu phản hồi
        $count_rank = count($evaluate);
        //số sao trung bình
        $average_rank = number_format($evaluate->avg('evaluate_rank'), 1);
        //tính %
        $average_rank_per = $average_rank * 100 / 5;

        return [$image,
        $evaluate,
        $count_rank,
        $average_rank,
        $average_rank_per,
        $rank_5,
        $rank_4,
        $rank_3, 
        $rank_2,
        $rank_1];
    }
    public function single_list(Request $request, $real_estate_id)
    {
<<<<<<< HEAD

        //thêm vào danh sách sp đã xem
        $real_id=$real_estate_id;
=======
        //thêm vào danh sách sp đã xem
>>>>>>> parent of d801d59... Revert "Merge branch 'master' into phuc.nguyen"
        $this->add_view_product($real_estate_id);

        $real_estate = RealEstate::join('district', 'real_estate.district_id', 'district.district_id')
        ->join('translation', 'real_estate.real_estate_id', 'translation.real_estate_id')
        ->join('province', 'district.province_id', 'province.province_id')
        ->join('unit', 'real_estate.unit_id', 'unit.unit_id')
        ->join('unit_translation', 'unit_translation.unit_id', 'unit.unit_id')
        ->select('real_estate.real_estate_id',
        'translation_name',
        'translation_address',
        'translation_description',
        'real_estate_price',
        'real_estate_acreage',
        'real_estate.created_at',
        'unit_translation.unit_translation_name',
        'province.province_name',
        'district.district_name')
        ->where([
            ['real_estate.real_estate_id', $real_estate_id],
            ['translation_locale', \Session::get('lang', config('app.locale'))],
            ['unit_translation_locale', \Session::get('lang', config('app.locale'))], ])
        ->first();
        $rate = Currency::select('currency_rate', 'currency_symbol')->where('currency_name', \Session::get('currency'))->first();

        $real_estate->real_estate_price = $real_estate->real_estate_price * $rate->currency_rate;
        // lấy hàm kiểm tra đã thích hay chưa
        $heart=$this->check_wishlist($real_estate_id);
        // gọi là dấy danh sách tương tác
        list($image,
        $evaluate,
        $count_rank,
        $average_rank,
        $average_rank_per,
        $rank_5,
        $rank_4,
        $rank_3, 
        $rank_2,
        $rank_1)=$this->get_evaluate($request, $real_estate, $real_estate);
        return view('pages.user.page.single_list', compact('real_estate',
        'image',
        'rate',
        'evaluate',
        'count_rank',
        'average_rank',
        'average_rank_per',
        'rank_5',
        'rank_4',
        'rank_3',
        'rank_2',
        'rank_1',
        'heart',
<<<<<<< HEAD
        'real_id'
=======
>>>>>>> parent of d801d59... Revert "Merge branch 'master' into phuc.nguyen"
        ));
    }

    //write Comment
    public function write_cmt (Request $request, $idsp, $idkh){
        $title = $request->title;
        $content = $request->content;
        $data = DB::table('evaluate')->insert(
            [
                'evaluate_title' => $title,
                'evaluate_content' => $content,
                'real_estate_id' => $idsp,
                'customer_id' => $idkh,
                //gán cứng khách hàng có id là 1
                'evaluate_rank' => 5
                //gán cứng 5 sao
            ]
        );
        return redirect()->route('single_list', ['real_estate_id' => $idsp]);
    }
    // write reply comment
    public function reply_cmt (Request $request , $idsp, $idcmt,$idrep)
    {
        $title = $request->title;
        $content = $request->content;
        $data = DB::table('evaluate')->insert(
            [
                'evaluate_title' => $title,
                'evaluate_content' => $content,
                'real_estate_id' => $idsp,
                'customer_id' => $idcmt,
                'evaluate_reply' => $idrep,
                'evaluate_rank' => 5
                //gán cứng 5 sao
            ]
        );
        return redirect()->route('single_list', ['real_estate_id' => $idsp]);
    }



    public function single_blog(Request $request,$blog_id)
    {
        $blog=Blog::join('blog_translation','blog.blog_id','blog_translation.blog_id')
        ->join('staff','staff.staff_id','blog.staff_id')
        ->select('blog_avatar',
        'blog_translation_title',
        'blog_translation_content',
        'staff_name')
        ->where([
            ['blog_translation_locale',\Session::get('lang', config('app.locale'))],
        ['blog.blog_id',$blog_id]
        ])
        ->first();
        // dd($blog);
        return view('pages.user.page.single_blog',compact('blog'));
    }

    public function subscription(Request $request, $user)
    {
        dd($request);
    }

    public function view_product(Request $request)
    {
        // dd($request);
        $view_product=ViewProduct::join('cookie_user','view_product.cookie_user_id','cookie_user.cookie_user_id')
        ->join('real_estate','view_product.real_estate_id','real_estate.real_estate_id')
        ->join('translation','real_estate.real_estate_id','translation.real_estate_id')
        ->join('district', 'real_estate.district_id', 'district.district_id')
        ->join('province', 'district.province_id', 'province.province_id')
        ->select(
        'real_estate.real_estate_id',
        'real_estate_avatar',
        'real_estate_avatar',
        'real_estate.created_at',
        'real_estate_price',
        'translation_name',
        'translation_address',
        'translation_description',
        'translation.translation_name',
        'province.province_name',
        'district.district_name',)
        ->where([['cookie_user.cookie_user_id',\Cookie::get('real_estate')],
        ['translation_locale', \Session::get('lang', config('app.locale'))],
        ['real_estate_status','Đang bán']])
        ->limit(6)
        ->get();
        $rate = Currency::select('currency_rate', 'currency_symbol')->where('currency_name', \Session::get('currency'))->first();
        Carbon::setlocale('vi');
        $now = Carbon::now();
        foreach ($view_product as $key => $value) {
            // dd(Carbon::parse($value->created_at));
            // dd($value['real_estate_id']);
            // $value['real_estate_id'] = $value->created_at->diffForHumans(($now));

            $value->created_at= Carbon::parse($value->created_at)->diffForHumans($now);
            $value->real_estate_price = $value->real_estate_price * $rate->currency_rate;
        }
        return view('pages.user.index',compact('view_product','rate'));
    }

    public function wishlist_customer(Request $request)
    {
        if(request()->ajax())
        {
            $real_estate_id = $request->get('real_estate_id');
            $customer_id = $request->get('customer_id');

                $check_product=WishList::where([['customer_id',$customer_id],['real_estate_id',$real_estate_id]])->first();
                if($check_product){
                    echo "alert('sản phẩm đã có trong danh sách yêu thích')";
                }
                else{
                    WishList::insert([
                        'real_estate_id'=>$real_estate_id,
                        'customer_id'=>$customer_id,
                    ]);
                }
            echo "<i class='fas fa-heart' id='heart'>";
        }
    }
    public function wishlist_cookie(Request $request)
    {
        if(request()->ajax())
        {
            $real_estate_id = $request->get('real_estate_id');
            

                $check_product=WishListTemp::where('cookie_user_id',\Cookie::get('real_estate'))->first();
                    if($check_product){
                        echo "alert('sản phẩm đã có trong danh sách yêu thích')";
                    }
                    else{
                        WishListTemp::insert([
                            'real_estate_id'=>$real_estate_id,
                            'cookie_user_id'=>\Cookie::get('real_estate')
                        ]);
                    }
            
            echo "<i class='fas fa-heart' id='heart'>";
            }
    }
}
