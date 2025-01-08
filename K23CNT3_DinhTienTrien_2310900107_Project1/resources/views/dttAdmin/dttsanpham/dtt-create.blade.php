@extends('_dttLayouts.backend._master')
@section('title', 'Thêm Mới Sản Phẩm')    
@section('content-body')
<form action="{{ route('tientrien.sanpham.Create') }}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Thêm mới sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                 <label for="dttMasanpham" class="col-sm-2 col-form-label">Mã Sản Phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttMasanpham" name="dttMasanpham" required />
                    @error('dttMasanpham')
                        <div class="text-danger">{{ 'Mã Sản Phẩm Đã Tồn Tại' }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttTensanpham" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttTensanpham" name="dttTensanpham" required />
                </div>
                @error('dttTensanpham')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 row">
                <label for="dttHinhanh" class="col-sm-2 col-form-label">Hình Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="dttHinhanh" name="dttHinhanh"accept="image/*" />
                </div>
                <script>
                    document.getElementById('dttHinhanh').addEventListener('change', function(event) {
                        const file = event.target.files[0];
                        const imagePreview = document.getElementById('imagePreview');               
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                imagePreview.src = e.target.result;
                                imagePreview.style.display = 'block'; // Còn dịch vụ hình ảnh
                            }
                            reader.readAsDataURL(file);
                        } else {
                            imagePreview.style.display = 'none'; // Ẩn hình ảnh nếu không có file
                        }
                    });</script>
            </div>
            <div class="mb-3 row">
                <label for="dttSoluong" class="col-sm-2 col-form-label">Số Lượng</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttSoluong" name="dttSoluong" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttDongia" class="col-sm-2 col-form-label">Đơn Giá</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttDongia" name="dttDongia" required />
                    @error('dttDongia')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttMaloai" class="col-sm-2 col-form-label">Tên loại</label>
                <div class="col-sm-10">
                    <select class="form-control" id="dttMaloai" name="dttMaloai" required>
                        <option value="">Chọn Tên Loại</option>
                        @foreach($dttloaisanpham as $item) 
                        <option value="{{ $item->dttMaloai }}">{{ $item->dttTenloai }}</option>
                        @endforeach
                    </select>
                    @error('dttMaloai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="dttTrangthai1" name="dttTrangthai" value="1" checked />
                    <label for="dttTrangthai1">Còn dịch vụ</label>
                    &nbsp;
                    <input type="radio" id="dttTrangthai0" name="dttTrangthai" value="0" />
                    <label for="dttTrangthai0">Tạm không có</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('tientrien.sanpham.List') }}" class="btn btn-secondary">Quay lại</a>
            <button type="submit" class="btn btn-warning">Thêm</button>
           
        </div>
    </div>
</form>
@endsection