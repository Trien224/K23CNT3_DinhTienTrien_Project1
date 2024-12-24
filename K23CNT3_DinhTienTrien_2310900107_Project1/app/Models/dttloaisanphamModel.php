<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dttloaisanphamModel extends Model
{
    use HasFactory;
    protected $table = 'dttloaisanpham'; //
    protected $fillable = [
        'dttMaloai',    // 
        'dttTenloai',   // 
        'dttTrangthai', // 
    ];
}
