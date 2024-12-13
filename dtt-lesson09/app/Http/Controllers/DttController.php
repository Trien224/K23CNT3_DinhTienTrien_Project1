<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DttSinhVien;
class DttController extends Controller
{
    // CRUD: List all DttSinhVien records
    public function dttList()
    {
        // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $dttsinhvien = DttSinhVien::all();

        // Trả về view với dữ liệu
        return view('dttsinhvien.dtt-list', ['dttSinhViens' => $dttsinhvien]);
    }
//
public function dttCreate()
{
    return view('DttSinhVien.dtt-create');

}
public function dttcreateSubmit(request $request)
{ 

    // lấy dữ liệu submit trên form, gán cho các thuộc tính của đối tượng sinh viên

    $dttSinhVien = new DttSinhVien();
    $dttSinhVien->dttMaSV = $request->dttMaSV;
    $dttSinhVien->dttHoSV = $request->dttHoSV;
    $dttSinhVien->dttTenSV = $request->dttTenSV;
    $dttSinhVien->dttPhai = (int) $request->dttPhai;

    $dttSinhVien->dttNgaySinh = $request->dttNgaySinh;
    $dttSinhVien->dttNoiSinh = $request->dttNoiSinh;
    $dttSinhVien->dttMaKhoa = $request->dttMaKhoa;
    $dttSinhVien->dttHocBong = $request->dttHocBong;
    $dttSinhVien->dttDiemTrungBinh = $request->dttDiemTrungBinh;

    // Ghi vào bảng trong csdl

        $dttSinhVien->save();
        // return view('DttSinhVien.dtt-create');
        return back()->with('dttSinhVien_created', 'Đã thêm mới một sinh viên thành công!');

}
}

