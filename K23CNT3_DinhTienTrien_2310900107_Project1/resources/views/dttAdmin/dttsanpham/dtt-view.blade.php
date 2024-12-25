@extends('_dttLayouts.backend._master')
@section('title', 'Xem Sản Phẩm')    

@section('content-body')
<form action="{{ route('tientrien.sanpham.View', $dttsanpham->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h3>Chi tiết sản phẩm</h3>
        </div>

        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="dttHinhanh" class="col-sm-2 col-form-label">Hình ảnh :</label>
                <div class="col-sm-10">
                    <img src="{{ asset('images/' . $dttsanpham->dttHinhanh) }}" alt="{{ $dttsanpham->dttTensanpham }}" style="max-width: 280px;">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttMasanpham" class="col-sm-2 col-form-label">Mã sản phẩm :</label>
                <div class="col-sm-10">
                    <p  id="dttMasanpham" readonly value="" name="dttMasanpham" >{{ $dttsanpham->dttMasanpham}}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttTensanpham" class="col-sm-2 col-form-label">Tên sản phẩm :</label>
                <div class="col-sm-10">
                    <p  id="dttTensanpham" readonly value="" name="dttTensanpham" >{{ $dttsanpham->dttTensanpham }} </p>
                </div>
            </div>
           
            <div class="mb-3 row">
                <label for="dttSoluong" class="col-sm-2 col-form-label">Số lượng :</label>
                <div class="col-sm-10">
                    <p  id="dttSoluong" readonly value="" name="dttSoluong" >{{ $dttsanpham->dttSoluong }} </p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttDongia" class="col-sm-2 col-form-label">Đồng giá :</label>
                <div class="col-sm-10">
                    <p  id="dttDongia" readonly value="" name="dttDongia" >{{ $dttsanpham->dttDongia }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttMaloai" class="col-sm-2 col-form-label">Mã loại :</label>
                <div class="col-sm-10">
                    <p  id="dttMaloai" readonly value="" name="dttMaloai" >{{ $dttsanpham->dttMaloai }}</p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái :</label>
                <div class="col-sm-10">

                    @if($dttsanpham->dttTrangthai==1)
                        <p>Còn hàng</p>
                    @else
                        <p>Hết hàng</p>
                    @endif

                </div>
            </div>
        </div>

        <div class="card-footer">
            <a href="{{route('tientrien.sanpham.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection