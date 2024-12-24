@extends('_dttLayouts.dttAdmin._master')
@section('title', 'Danh Sách Sản Phẩm')    
@section('content-body')
<div class="container border">
    <div class="col-12">
        <h1>Sản Phẩm</h1>
        <a href="/dttAdmin/sanpham/dtt-create" class="btn btn-primary">Thêm Sản Phẩm Mới</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã loại</th>
                        <th>Trạng thái</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($dttsanpham as  $item)
                    <tr>
                        <td>{{$loop->iteration+($dttsanpham->currentPage()-1)*$dttsanpham->perPage()}}</td>
                        <td>{{ $item->dttMasanpham }}</td>
                        <td>{{ $item->dttTensanpham }}</td>
                        <td>{{ $item->dttHinhanh }}</td>
                        <td>{{ $item->dttSoluong }}</td>
                        <td>{{ $item->dttDongia }}</td>
                        <td>{{ $item->dttMaloai }}</td>
                        <td>{{ $item->dttTrangthai }}</td>
                        <td>
                            <a href="#" class="btn btn-info">
                                Xem</a>
                            <a href="#" class="btn btn-primary">
                                Sửa</a>
                                <a href="#" class="btn btn-danger" onclick="return  dttNotice();">
                                    Xóa
                                </a>   
                                <script>
                                    function  dttNotice() {
                                        return confirm("Bạn có chắc chắn muốn xóa mục này?"); 
                                    }
                                </script>
                        </td>    
                    </tr>    
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Không Có Thông Tin</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
            <tr>{{$dttsanpham->links('pagination::bootstrap-5')}}</tr>
        </div>
        
    </div>
    
</div>
@endsection