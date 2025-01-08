@extends('_ctLayouts.dttAdmin._master')

@section('title', 'Chỉnh Sửa Admin')    

@section('content-body')
<form action="{{ route('CongTung.Admin.EditSubmit', $dttAdmin->id) }}" method="post">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa Admin</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="dttTenloai" class="col-sm-2 col-form-label">Tài Khoản</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttTenloai" value="{{ $dttAdmin->dttTaikhoan }}" name="dttTenloai" readonly />
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="dttTrangthai1" name="dttTrangthai" value="1" {{ $dttAdmin->dttTrangthai == 1 ? 'checked' : '' }} />
                    <label for="dttTrangthai1">Còn dịch vụ</label>
                    &nbsp;
                    <input type="radio" id="dttTrangthai0" name="dttTrangthai" value="0" {{ $dttAdmin->dttTrangthai == 0 ? 'checked' : '' }} />
                    <label for="dttTrangthai0">Tạm không có</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">Ghi lại</button>
            <a href="{{route('CongTung.Admin.List') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</form>
@endsection