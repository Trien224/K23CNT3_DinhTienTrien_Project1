<?php

namespace App\Http\Controllers;

use App\Models\dttloaisanphamModel;
use Illuminate\Http\Request;

class dttloaisanphamController extends Controller
{
    // crud
    //list
    public function dttHome(){
        return view('dttAdmin.index');
    }
    public function dttPutToList(){
        $dttloaisanpham=dttloaisanphamModel::all();
        return view('dttAdmin.dttsanpham.dtt-create',compact('dttloaisanpham'));
    }
    public function dttList(){
        $dttloaisanpham=dttloaisanphamModel::paginate(5);
        return view('dttAdmin.dttloaisanpham.dtt-list',['dttloaisanpham'=>$dttloaisanpham]);
    }
    public function dttCreate(){
        return view('dttAdmin.dttloaisanpham.dtt-create');
    }
    public function dttCreateSubmit(Request $request) {
        $request->validate([
            'dttMaloai' => 'required|string|max:255|unique:dttloaisanpham',
            'dttTenloai' => 'required|string|max:255',
            'dttTrangthai'=>'required|boolean'
        ]);

        $dttloaisanpham = new dttloaisanphamModel;
        $dttloaisanpham->dttMaloai = $request->dttMaloai;
        $dttloaisanpham->dttTenloai = $request->dttTenloai;
        $dttloaisanpham->dttTrangthai = $request->dttTrangthai;
        $dttloaisanpham->save();
        return redirect('/dttAdmin/dtt-list');
    }
    public function dttEdit($id) {
        $dttloaisanpham = dttloaisanphamModel::find($id);
        return view('dttAdmin.dttloaisanpham.dtt-edit', ['dttloaisanpham' => $dttloaisanpham]);
    }
    # edit submit
    public function dttEditSubmit(Request $request,$id)
    {
        $request->validate([
            'dttMaloai' => 'required|string|max:255',
            'dttTenloai' => 'required|string|max:255',
            'dttTrangthai'=>'required|boolean'
        ]);
        
        $maloai = $request->input('dttMaloai');
        $tenloai = $request->input('dttTenloai');
        $trangthai=$request->input('dttTrangthai');
        $dttloaisanpham = dttloaisanphamModel::find($id);
        $dttloaisanpham->dttMaloai = $maloai;
        $dttloaisanpham->dttTenloai = $tenloai;
        $dttloaisanpham->dttTrangthai = $trangthai;
        $dttloaisanpham->save(); 
        return redirect('/dttAdmin/dtt-list');
    }
    public function dttDelete($id)
    {
        $dttloaisanpham = dttloaisanphamModel::find($id);
        $dttloaisanpham->delete();
        return redirect()->route('tientrien.List');
    }
    public function dttView($id) {
        $dttloaisanpham = dttloaisanphamModel::find($id);
        return view('dttAdmin.dttloaisanpham.dtt-view', ['dttloaisanpham' => $dttloaisanpham]);
    }
}