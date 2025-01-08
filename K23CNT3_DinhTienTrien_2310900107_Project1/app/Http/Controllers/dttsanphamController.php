<?php
namespace App\Http\Controllers;
use App\Models\dttsanphamModel;
use App\Models\dttloaisanphamModel;
use Illuminate\Http\Request;

class dttsanphamController extends Controller
{   public function dttDelete($id)
    {
        $dttsanpham = dttsanphamModel::find($id);
        $dttsanpham->delete();
        return redirect()->route('tientrien.sanpham.List');
    }
    public function dttView($id)
    {
        $dttsanpham = dttsanphamModel::find($id);
        return view('dttAdmin.dttsanpham.dtt-view', ['dttsanpham' => $dttsanpham]);
    }
    public function dttList()
    {   
        $dttsanpham = dttsanphamModel::paginate(5);
        return view('dttAdmin.dttsanpham.dtt-list', ['dttsanpham' => $dttsanpham]);
    }
    public function dttCreate()
    {
        // Lấy tất cả các loại sản phẩm từ bảng dttloaisanpham
        $dttloaisanpham = dttloaisanphamModel::all();
        // Trả về view và truyền biến $dttloaisanpham vào
        return view('dttAdmin.dttsanpham.dtt-create', compact('dttloaisanpham'));
    }
    public function dttCreateSubmit(Request $request)
    {
        $request->validate([
            'dttMasanpham' => 'required|string|unique:dttsanpham', // Mã sản phẩm phải duy nhất
            'dttTensanpham' => 'required|string',
            'dttHinhanh' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'dttSoluong' => 'required|numeric',
            'dttDongia' => 'required|numeric',
            'dttMaloai' => 'required',
            'dttTrangthai' => 'required|boolean',
        ]);
        // Tạo mới sản phẩm
        $dttsanpham = new dttsanphamModel();
        $dttsanpham->dttMasanpham = $request->dttMasanpham;
        $dttsanpham->dttTensanpham = $request->dttTensanpham;
        // Xử lý hình ảnh nếu có
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
    public function dttEdit($id)
    {
        $dttsanpham = dttsanphamModel::find($id);
        $dttloaisanpham = dttloaisanphamModel::all();
        return view('dttAdmin.dttsanpham.dtt-edit',
            compact('dttsanpham', 'dttloaisanpham'));
    }
    public function dttEditSubmit(Request $request, $id)
{
    $dttsanpham = dttsanphamModel::find($id);

    // Validate incoming data
    $request->validate([
        'dttMasanpham' => 'required|string|unique:dttsanpham,dttMasanpham,' . $id, // Ensure uniqueness, but allow the current product to retain its MASANPHAM
        'dttTensanpham' => 'required|string',
        'dttHinhanh' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Validate the image format
        'dttSoluong' => 'required|numeric',
        'dttDongia' => 'required|numeric',
        'dttMaloai' => 'required',
        'dttTrangthai' => 'required|boolean',
    ]);

    // Handle Image Upload
    if ($request->hasFile('dttHinhanh')) {
        // Delete old image if exists
        if ($dttsanpham->dttHinhanh && file_exists(public_path('images/' . $dttsanpham->dttHinhanh))) {
            unlink(public_path('images/' . $dttsanpham->dttHinhanh));
        }

        // Store the new image in public/images and get the filename
        $imageName = time() . '.' . $request->file('dttHinhanh')->getClientOriginalExtension();
        $request->file('dttHinhanh')->move(public_path('images'), $imageName);

        // Save the filename to database
        $dttsanpham->dttHinhanh = $imageName;
    }

    // Update other fields
    $dttsanpham->dttMasanpham = $request->input('dttMasanpham');
    $dttsanpham->dttTensanpham = $request->input('dttTensanpham');
    $dttsanpham->dttSoluong = $request->input('dttSoluong');
    $dttsanpham->dttDongia = $request->input('dttDongia');
    $dttsanpham->dttMaloai = $request->input('dttMaloai');
    $dttsanpham->dttTrangthai = $request->input('dttTrangthai');

    // Save the updated product
    $dttsanpham->save();

    return redirect()->route('tientrien.sanpham.List'); // Redirect to the product list
}
}