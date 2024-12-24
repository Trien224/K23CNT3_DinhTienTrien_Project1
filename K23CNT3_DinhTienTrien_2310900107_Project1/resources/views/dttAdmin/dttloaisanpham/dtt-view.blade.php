@extends('_dttLayouts.dttAdmin._master')

@section('title', 'Xem Loại Sản Phẩm')    

@section('content-body')
<form action="{{ route('tientrien.View', $dttloaisanpham->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Xem chi tiết sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="dttMaloai" class="col-sm-2 col-form-label">Mã loại:</label>
                <div class="col-sm-10">
                    <p  id="dttMaloai" readonly value="" name="dttMaloai" >{{ $dttloaisanpham->dttMaloai }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttTenloai" class="col-sm-2 col-form-label">Tên loại:</label>
                <div class="col-sm-10">
                    <p  id="dttTenloai" readonly value="" name="dttTenloai" >{{ $dttloaisanpham->dttTenloai }} </p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái:</label>
                <div class="col-sm-10">

                    @if($dttloaisanpham->dttTrangthai==1)
                        <p>Còn hàng</p>
                    @else
                        <p>Hết hàng</p>
                    
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('tientrien.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection