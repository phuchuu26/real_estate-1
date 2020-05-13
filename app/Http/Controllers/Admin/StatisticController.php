<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DepositContract;
use App\Models\DetailFee;
use App\Models\RealEstate;
use Carbon;
// use App\Speed;
use DB;


class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function real_estate()
    {

            $range = \Carbon\Carbon::now()->subYears(5);
            $realMonths = DB::table('real_estate')
                        ->select(DB::raw('month(created_at) as getMonth'), DB::raw('COUNT(*) as value'))
                        ->where('created_at', '>=', $range)
                        ->groupBy('getMonth')
                        ->orderBy('getMonth', 'ASC')
                        ->get();
            $realWeeks = DB::table('real_estate')
                        ->select(DB::raw('week(created_at) as getWeek'), DB::raw('COUNT(*) as value'))
                        ->where('created_at', '>=', $range)
                        ->groupBy('getWeek')
                        ->orderBy('getWeek', 'ASC')
                        ->get();

            // return view('fdfadmin.chart.get_year', compact('orderYear'));

    // function orderByYear() mình sẽ lấy tổng các order trong vòng 5 năm tính từ năm hiện tại và fill vào **bar chart**

        // $real = DB::table('real_estate')->get();
        // dd($realMonths);
        // dd($realWeeks);
        $cottuan1 =  $realWeeks->pluck('getWeek');
        $cotgiatri1 =  $realWeeks->pluck('value');

        // dd($cotgiatri1);


        return view('pages.admin.statistic.real_estate',compact('realMonths','realWeeks','cotgiatri1','cottuan1'));
    }
    public function basic()
    {
         $user = DB::table('Customer')->count();
        //  deposit_contract_total_money
         $money = DB::table('deposit_contract')->sum('deposit_contract_total_money');
         $cart = DB::table('detail_fee')->sum('detail_fee_id');


        //  dd($money);
        return view('pages.admin.dashboard',compact('user','money','cart'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
