
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<style>
    input{
        border-radius: 0!important;
    }
</style>
</head>
<body>
    <setction class="container">
        <form action="{{route('dttSinhVien.dttcreateSubmit')}}" method="post">
            @csrf
        <div class="card">
            <div class="card-header">
                <h1>Them moi</h1>   
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="dttMaSV" class="col-sm-2 col-form-label">Ma sinh vien</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttMaSV" name="dttMaSV">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttHoSV" class="col-sm-2 col-form-label">Ho sinh vien</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttHoSV" name="dttHoSV">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttTenSV" class="col-sm-2 col-form-label">Ten sinh vien</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttTenSV" name="dttTenSV">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttPhai" class="col-sm-2 col-form-label">Nam/Nu</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttPhai" name="dttPhai">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttNgaySinh" class="col-sm-2 col-form-label">NgaySinh sinh vien</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttNgaySinh" name="dttNgaySinh">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttNoiSinh" class="col-sm-2 col-form-label">Noi Sinh</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttNoiSinh" name="dttNoiSinh">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttMaKhoa" class="col-sm-2 col-form-label">Khoa</label>
                    <div class="col-sm-10">
                      <select name="dttMaKhoa" id="dttMakhoa">
                        <option value="">--MOI Chose</option>
                        <option value="Av">Anh Van</option>
                        <option value="Th">Tin hoc</option>
                        <option value="Tr">Triet hoc</option>
                      </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttHocBong" class="col-sm-2 col-form-label">Hoc Bong</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttHocBong" name="dttHocBong">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="dttDiemTrungBinh" class="col-sm-2 col-form-label">Diem</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="dttDiemTrungBinh" name="dttDiemTrungBinh">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Them moi</button>
            <a href="/SinhViens" class="btn btn-secondary">Back</a>
            </div>
            
        </div>
    </form>
    </setction>
</body>
</html>