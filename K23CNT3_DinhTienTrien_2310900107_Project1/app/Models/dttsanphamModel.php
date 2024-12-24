<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dttsanphamModel extends Model
{
    use HasFactory;
    protected $table = 'dttsanpham'; // 
    protected $fillable = [
        'dttMasanpham',    //
        'dttTensanpham',   // 
        'dttHinhanh',      // 
        'dttSoluong',      // 
        'dttDongia',       // 
        'dttMaloai',       // 
        'dttTrangthai',    // 
    ];
}

