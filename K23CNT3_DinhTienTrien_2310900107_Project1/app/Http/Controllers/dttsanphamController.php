<?php
namespace App\Http\Controllers;
use App\Models\dttsanphamModel;
use Illuminate\Http\Request;
class dttsanphamController extends Controller
{   
    public function dttView($id) {
        $dttsanpham = dttsanphamModel::find($id);
        return view('dttAdmin.dttsanpham.dtt-view', ['dttsanpham' => $dttsanpham]);
    }
    //
    public function dttList(){
        $dttsanpham = dttsanphamModel::paginate(5);
        return view('dttAdmin.dttsanpham.dtt-list', ['dttsanpham' => $dttsanpham]);
    }

   public function dttCreate()
{
    // Lấy tất cả các loại sản phẩm từ bảng dttloaisanpham (hoặc tên bảng khác tùy vào cấu trúc CSDL)
    $dttloaisanpham = \App\Models\dttloaisanphamModel::all(); 

    // Trả về view và truyền biến $dttloaisanpham vào
    return view('dttAdmin.dttsanpham.dtt-create', compact('dttloaisanpham'));
}


    public function dttCreateSubmit(Request $request) {
        $request->validate([
            'dttMasanpham' => 'required|string|unique:dttsanpham', // Update the table name if necessary
            'dttTensanpham' => 'required|string',
            'dttHinhanh' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'dttSoluong' => 'required|numeric',
            'dttDongia' => 'required|numeric',
            'dttMaloai' => 'required',
            'dttTrangthai' => 'required|boolean'
        ]);
    
        $dttsanpham = new dttsanphamModel(); // Update model name if necessary
        $dttsanpham->dttMasanpham = $request->dttMasanpham;
        $dttsanpham->dttTensanpham = $request->dttTensanpham;
        
        // Xử lý hình ảnh
        if ($request->hasFile('dttHinhanh')) {
            $dttGetAnh = $request->file('dttHinhanh');
            $SaveAs = time() . '.' . $dttGetAnh->getClientOriginalExtension(); // Tạo tên file duy nhất
            $dttGetAnh->move(public_path('images'), $SaveAs); // Lưu hình ảnh vào thư mục public/images
            $dttsanpham->dttHinhanh = $SaveAs; // Lưu tên file vào cơ sở dữ liệu
        }
    
        $dttsanpham->dttSoluong = $request->dttSoluong;
        $dttsanpham->dttDongia = $request->dttDongia;
        $dttsanpham->dttMaloai = $request->dttMaloai;
        $dttsanpham->dttTrangthai = $request->dttTrangthai;
        $dttsanpham->save();
    
        return redirect('/dttAdmin/sanpham/dtt-list');
    }

}
