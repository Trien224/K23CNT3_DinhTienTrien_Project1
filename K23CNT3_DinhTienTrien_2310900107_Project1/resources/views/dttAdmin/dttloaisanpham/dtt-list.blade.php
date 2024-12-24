@extends('_dttLayouts.dttAdmin._master')
@section('title', 'Danh Sách Loại Sản Phẩm')    
@section('content-body')
<div class="container border">
    <div class="col-12">
        <h1>Loại Sản Phẩm</h1>
        <a href="/dttAdmin/dtt-create" class="btn btn-primary">Thêm Loại Sản Phẩm Mới</a>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dttloaisanpham as  $item)
                    <tr>
                        <td>{{$loop->iteration+($dttloaisanpham->currentPage()-1)*$dttloaisanpham->perPage()}}</td>
                        <td>{{ $item->dttMaloai }}</td>
                        <td>{{ $item->dttTenloai }}</td>
                        <td>{{ $item->dttTrangthai }}</td>
                        <td>
                            <a href="/dttAdmin/dtt-view/{{$item->id}}" class="btn btn-info">
                                Xem</a>
                            <a href="/dttAdmin/dtt-edit/{{$item->id}}" class="btn btn-primary">
                                Sửa</a>
                                <a href="/dttAdmin/dtt-delete/{{$item->id}}" class="btn btn-danger" onclick="return dttNoitice();">
                                    Xóa
                                </a>   
                                <script>
                                    function dttNoitice() {
                                        return confirm("Bạn có chắc chắn muốn xóa mục này?"); 
                                    }
                                </script>
                        </td>    
                    </tr>    
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Chưa Có Thông Tin</td>
                    </tr>  
                    @endforelse
                </tbody>
            </table>
            <tr>{{$dttloaisanpham->links('pagination::bootstrap-5')}}</tr>
        </div>
        
    </div>
    
</div>
@endsection