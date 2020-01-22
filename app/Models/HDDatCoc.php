<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HDDatCoc extends Model
{
    protected $table = 'hddatcoc';

    protected $primaryKey = 'hdhddatcoc_id';

    protected $keyType = 'int';

    protected $fillable = [
    'hddc_id',
    'hddc_ma',
    'hddc_tiencoc',
    'hddc_ngaydc',
    'created_at',
    'updated_at',
    'deleted_at',
    ];
    public $timestamps = true;
    protected $dates = ['deleted_at'];
}
