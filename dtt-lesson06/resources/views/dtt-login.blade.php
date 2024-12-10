<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Information</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
        <section class="container my-3">
            <form method="POST" action="{{route('dttaccount.dttloginsubmit')}}">
                @csrf
                <div class="card">

                    <div class="card-header">
                        <h1>Dtt-Login</h1>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="dttEmail" class="form-label">Email</label>
                            <input type="email" class="form-control"
                                id="dttEmail" name="dttEmail"
                                placeholder="dttEmail@example.com"/>
                            @error('dttEmail')
                            <span id="dttEmail">{{$message}}</span>
                            @enderror
                        </div>
                    </div class="mb-3">
                            <label for="dttPass" class="form-label">Password</label>
                            <input type="password" class="form-control"
                                id="dttPass" name="dttPass"
                                placeholder="xxx"/>
                                @error('dttPass')
                                <span id="email-error">{{$message}}</span>
                                @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                    @if (Session::has('dtt-error'))
                <div class="alert alert-danger">
                {{
                    Session::get('dtt-error')
                }}
                </div>
                   @endif
            </div>
        </form>
    </section>
</body>
</html>