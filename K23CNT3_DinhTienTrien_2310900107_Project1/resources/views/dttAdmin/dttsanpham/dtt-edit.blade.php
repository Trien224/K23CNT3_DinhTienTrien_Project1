@extends('_dttLayouts.backend._master')
@section('title', 'Chỉnh Sửa Sản Phẩm')    
@section('content-body')
<form action="{{ route('tientrien.sanpham.EditSubmit', $dttsanpham->id) }}" method="post" enctype="multipart/form-data">
    @csrf 
    <div class="card">
        <div class="card-header">
            <h2>Chỉnh sửa sản phẩm</h2>
        </div>
        <div class="card-body container-fluid">
            <div class="mb-3 row">
                <label for="dttMasanpham" class="col-sm-2 col-form-label">Mã Sản Phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttMasanpham" name="dttMasanpham" value="{{ old('dttMasanpham', $dttsanpham->dttMasanpham) }}" required />
                    @error('dttMasanpham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttTensanpham" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="dttTensanpham" name="dttTensanpham" value="{{ old('dttTensanpham', $dttsanpham->dttTensanpham) }}" required />
                    @error('dttTensanpham')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttHinhanh" class="col-sm-2 col-form-label">Hình Ảnh</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="dttHinhanh" name="dttHinhanh" accept="image/*" />
                    @if($dttsanpham->dttHinhanh)
                        <!-- Display the existing image if it exists -->
                        <img id="imagePreview" src="{{ asset('images/' . $dttsanpham->dttHinhanh) }}" alt="Hình Ảnh Sản Phẩm" style="max-width: 200px; margin-top: 10px;" />
                    @else
                        <img id="imagePreview" src="{{ asset('images/default-image.jpg') }}" alt="Hình Ảnh Sản Phẩm" style="max-width: 200px; margin-top: 10px;" />
                    @endif
                </div>
            </div>
            
            <script>
                document.getElementById('dttHinhanh').addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    const imagePreview = document.getElementById('imagePreview');               
            
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            imagePreview.src = e.target.result; // Preview the selected image
                            imagePreview.style.display = 'block'; // Show the image preview
                        }
                        reader.readAsDataURL(file);
                    } else {
                        imagePreview.style.display = 'none'; // Hide image preview if no file selected
                    }
                });
            </script>
            <div class="mb-3 row">
                <label for="dttSoluong" class="col-sm-2 col-form-label">Số Lượng</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="dttSoluong" name="dttSoluong" value="{{ old('dttSoluong', $dttsanpham->dttSoluong) }}" required />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="dttDongia" class="col-sm-2 col-form-label">Đơn Giá</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" id="dttDongia" name="dttDongia" value="{{ old('dttDongia', $dttsanpham->dttDongia) }}" required />
                    @error('dttDongia')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
           <div class="mb-3 row">
                <label for="dttMaloai" class="col-sm-2 col-form-label">Tên Loại</label>
                <div class="col-sm-10">
                    <select class="form-control" id="dttMaloai" name="dttMaloai" required>
                        <option value="">Chọn Tên Loại</option>
                        @foreach($dttloaisanpham as $item) 
                        <option value="{{ $item->dttMaloai }}" {{ $item->dttMaloai == $dttsanpham->dttMaloai ? 'selected' : '' }}>
                            {{ $item->dttTenloai }}
                        </option>
                        @endforeach
                    </select>
                    @error('dttMaloai')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Trạng Thái</label>
                <div class="col-sm-10">
                    <input type="radio" id="dttTrangthai1" name="dttTrangthai" value="1" {{ $dttsanpham->dttTrangthai == 1 ? 'checked' : '' }} />
                    <label for="dttTrangthai1">Còn dịch vụ</label>
                    &nbsp;
                    <input type="radio" id="dttTrangthai0" name="dttTrangthai" value="0" {{ $dttsanpham->dttTrangthai == 0 ? 'checked' : '' }} />
                    <label for="dttTrangthai0">Tạm không có</label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('tientrien.sanpham.List') }}" class="btn btn-secondary">Quay lại</a>
            <button type="submit" class="btn btn-warning">Ghi lại</button>
            
        </div>
    </div>
</form>
@endsection
