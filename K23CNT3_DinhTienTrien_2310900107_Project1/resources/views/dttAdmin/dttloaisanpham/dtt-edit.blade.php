@extends('_dttLayouts.backend._master')

@section('title', 'Chỉnh Sửa Loại Sản Phẩm')    

@section('content-body')
<form action="{{ route('tientrien.EditSubmit', $dttloaisanpham->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa loại sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="dttMaloai" class="col-sm-2 col-form-label">Mã loại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttMaloai" value="{{ $dttloaisanpham->dttMaloai }}" name="dttMaloai"  readonly required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttTenloai" class="col-sm-2 col-form-label">Tên loại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttTenloai" value="{{ $dttloaisanpham->dttTenloai }}" name="dttTenloai" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="dttTrangthai1" name="dttTrangthai" value="1" {{ $dttloaisanpham->dttTrangthai == 1 ? 'checked' : '' }} />
                    <label for="dttTrangthai1">Còn dịch vụ</label>
                    &nbsp;
                    <input type="radio" id="dttTrangthai0" name="dttTrangthai" value="0" {{ $dttloaisanpham->dttTrangthai == 0 ? 'checked' : '' }} />
                    <label for="dttTrangthai0">Tạm không có</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('tientrien.List') }}" class="btn btn-secondary">Quay lại</a>
            <button type="submit" class="btn btn-warning">Ghi lại</button>
            
        </div>
    </div>
</form>
@endsection