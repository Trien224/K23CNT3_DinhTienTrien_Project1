<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DttSessionController extends Controller
{
    #Đọc dữ liệu từ session
    public function dttGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT3_DinhTienTrien"))
        {
            echo "<h2> Session Data:". $request->session()->get("K23CNT3_DinhTienTrien");
        }else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }
        #Lưu dữ liệu vào session
    public function dttStoreSessionData(Request $request)
        {
            $request->session()->put('K23CNT3_DinhTienTrien','K23NT1-Dinhtientrien-2310900107');
            echo "Du lieu ghi ";
        }
        #Xóa dữ liệu trong session
    public function dttDeleteSessionData(Request $request)
        {
            $request->session()->forget('K23CNT3_DinhTienTrien');
            echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
        }
}
