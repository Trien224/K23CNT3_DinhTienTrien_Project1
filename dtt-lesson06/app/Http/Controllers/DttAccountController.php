<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DttAccountController extends Controller
{
    public function dttLogin(){
        return view('dtt-login');
    }
    public function dttLoginSubmit(Request $request)
    {
        $validation = $request->validate([
            'dttEmail'=> 'required|email',
            'dttPass'=>   'required|min:6'
        ]);
        $dttEmail = $request->input('dttEmail');
        $dttPass = $request->input('dttPass');

        $dttLoginSession = [
            'dttEmail'=> $dttEmail,
            'dttPass'=>  $dttPass
        ];

        $dtt_json = json_encode($dttLoginSession);

        if($dttEmail == "dtt@gmail.com" && $dttPass=="123@12")
        {
            $request->session()->put('K23CNT3_DinhTienTrien', $dttEmail);
            return redirect('/');
        }

        return redirect()->back()->with('dtt-error','Loi');
    }
    public function dttLogout(Request $request)
        {
            $request->session()->forget('K23CNT3_DinhTienTrien');
            $request->session()->flush();
           return redirect('/');
        }
}
    