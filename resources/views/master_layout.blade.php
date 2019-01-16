{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Danh sách sim</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="alert alert-success" role="alert">
              <h3 class="alert-heading text-center">Quản lý số sim</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{route('danhsachsim')}}" class="btn btn-primary">Danh sách sim</a>
                <a href="{{route('getAdd')}}" class="btn btn-success">Thêm mới</a>
            </div>
        </div>
        <div class="row">
            <hr>
        </div>
        @yield('content')
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <title>Quản lý sim</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            <h3 class="alert-heading text-center"><strong>QUẢN LÝ SỐ SIM</strong></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{route('danhsachsim')}}" class="btn btn-outline-primary">Danh sách sim</a>
                        <a href="{{route('getAdd')}}" class="btn btn-outline-success">Thêm mới</a>
                    </div>
                </div>
                <div class="row">
                    <hr>
                </div>
                @yield('content')
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>