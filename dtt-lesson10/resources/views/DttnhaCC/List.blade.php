<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h1> DS NhaCC </h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">      
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Mã NCC</th>
                        <th>Tên CC</th>
                        <th>Địa Chỉ</th>
                        <th>email</th>
                        <th class="text-center">Chức năng</th>
                    </tr>
                </thead>
                    <tbody>
                        @php
                            $stt = 1;
                        @endphp
                        @foreach ($dttNhaCCs as $item)
                            <tr>
                                <th class="text-center">{{$stt++}}</th>
                                <td>{{$item->dttMaNCC}}</td>
                                <td>{{$item->dttTenNCC}} {{$item->dttTenSV}}</td> <!-- Combined first and last name -->
                                <td>{{$item->dttDiaChi}}</td>
                                <td>{{$item->dttemail}}</td>
                                <td>{{$item->dttDienThoai}}</td>
                                <td class="text-center">
                                    <!-- Links for viewing, editing, and deleting -->
                                    <a href="/dtt-sinhvien/{{$item->id}}" class="btn btn-info btn-sm">View</a>
                                    <a href="/dtt-sinhvien/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/dtt-sinhvien/{{$item->id}}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>

                                          
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           
        </div>
    </section>
</body>
</html>