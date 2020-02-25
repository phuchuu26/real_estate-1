<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    protected $table = 'real_estate';

    protected $primaryKey = 'real_estate_id';

    protected $keyType = 'int';

    protected $fillable = [
        'type_id',
        'status_id',
        'brokerage_fee_id',
        'unit_id',
        'district_id',
        'ward_id',
        'street_id',
        'customer_id',
        'real_estate_id',
        'real_estate_name',
        'real_estate_acreage',
        'real_estate_price',
        'real_estate_descrpition',
        'real_estate_address',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected function fullTextWildcards($term)
    {
        // removing symbols used by MySQL
        $reservedSymbols = ['-', '+', '<', '>', '@', '(', ')', '~'];
        $term = str_replace($reservedSymbols, '', $term);

        $words = explode(' ', $term);

        foreach ($words as $key => $word) {
            /*
             * applying + operator (required word) only big words
             * because smaller ones are not indexed by mysql
             */
            if (strlen($word) >= 1) {
                $words[$key] = '+'.$word.'*';
            }
        }

        $searchTerm = implode(' ', $words);

        return $searchTerm;
    }

    public function scopeFullTextSearch($query, $term)
    {
        $query->whereRaw('MATCH real_estate_name_vi AGAINST (? IN BOOLEAN MODE)',
        $this->fullTextWildcards($term));
        // ->orWhereRaw('MATCH real_estate_name_en AGAINST (? IN BOOLEAN MODE)',
        // $this->fullTextWildcards($term))
        // ->orWhereRaw('MATCH real_estate_description_en AGAINST (? IN BOOLEAN MODE)',
        // $this->fullTextWildcards($term))
        // ->orWhereRaw('MATCH real_estate_description_vi AGAINST (? IN BOOLEAN MODE)',
        // $this->fullTextWildcards($term));

        return $query;
    }
}
