<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DttNhaCC;
class DttNhaCCController extends Controller
{
    //
    public function list(){
        $dttNhaCCs = DttNhaCC::all();
        return view('DttNhaCC.List',['dttNhaCCs'=>$dttNhaCCs]);
    }
}
