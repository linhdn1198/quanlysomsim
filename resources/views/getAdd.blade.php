@extends('master_layout')
@section('content')
    
<div class="row">
    <div class="col-md-6">

        @if (count($errors) > 0)
            @foreach ($errors->all() as $item)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{$item}}</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endforeach
        @endif

        @if (session('thongbao'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('thongbao')}}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form action="{{route('postAdd')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Số sim</label>
              <input type="text" class="form-control" name="sosim" id="sosim" placeholder="Nhập số sim">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input type="text" class="form-control" name="gia" id="sosim" placeholder="Nhập giá">
            </div>
            <div class="form-group">
              <input type="submit" name="" id="" value="Thêm" class="btn btn-outline-success">
              <input type="reset" name="" id="" value="Làm mới" class="btn btn-outline-danger">
            </div>
        </form>
    </div>
</div>

@endsection