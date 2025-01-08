<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DttVattuController extends Controller
{
    //
    public function list(){
        $dttVattu = DttVattu::all();
        return view('DttVattu.List',['dttVattu'=>$dttVattu]);
    }
}
