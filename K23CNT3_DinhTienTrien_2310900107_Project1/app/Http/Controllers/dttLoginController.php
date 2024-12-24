<?php

namespace App\Http\Controllers;

use App\Models\dttQuanTriModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dttLoginController extends Controller
{
    //
    public function dttIndex(){
        return view('dttLogin.Login');
    }

    public function dttLoginSubmit(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'dttTaikhoan' => 'required',
            'dttMatkhau' => 'required',
        ]);

        // Tìm kiếm người dùng trong cơ sở dữ liệu
        $admin = dttQuanTriModels::where('dttTaikhoan', $request->dttTaikhoan)
            ->where('dttMatkhau', $request->dttMatkhau)
            ->first();

        // Kiểm tra xem người dùng có tồn tại không
        if ($admin) {
            // Lưu cookie nếu người dùng chọn "Remember Me"
            if ($request->has('dttRemember')) {
                $request->session()->regenerate();
                return redirect()->route('tientrien.Home')->withCookie(cookie('dttTaikhoan', $request->dttTaikhoan, 60 * 24 * 30)); // Lưu cookie trong 30 ngày
            }
            return redirect()->route('tientrien.Home');
        }

        // Nếu không tìm thấy người dùng, trả về lỗi
        return back()->withErrors([
            'dttTaikhoan' => 'Thông tin đăng nhập không chính xác.',
        ]);   
    }
}
