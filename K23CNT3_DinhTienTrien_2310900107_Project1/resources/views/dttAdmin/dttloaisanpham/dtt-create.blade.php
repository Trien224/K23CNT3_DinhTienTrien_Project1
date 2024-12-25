@extends('_dttLayouts.backend._master')

@section('title', 'Thêm Mới Loại Sản Phẩm')    

@section('content-body')
<form action="{{ route('tientrien.Create') }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Thêm mới loại sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="dttMaloai" class="col-sm-2 col-form-label">Mã loại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttMaloai" name="dttMaloai" required />
                    @error('dttMaloai')
                        <div class="text-danger">{{ 'Mã Loại Đã Tồn Tại' }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttTenloai" class="col-sm-2 col-form-label">Tên loại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttTenloai" name="dttTenloai" required />
                </div>
                @error('dttTenloai')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="dttTrangthai1" name="dttTrangthai" value="1" checked />
                    <label for="dttTrangthai1">Còn hàng</label>
                    &nbsp;
                    <input type="radio" id="dttTrangthai0" name="dttTrangthai" value="0" />
                    <label for="dttTrangthai0">Hết hàng</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Thêm</button>
            <a href="{{ route('tientrien.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection
