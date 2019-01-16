@extends('master_layout')
@section('content')
    
<div class="row">
    @foreach ($danhsachsosim as $item)
        <div class="col-md-3">
            <div class="card border-primary" style="margin-bottom:50px;">
                <div class="card-body">
                    <h5 class="card-title">Số sim : {{$item->sosim}}</h5>
                    <p class="card-text">Giá : {{$item->gia}}</p>
                    <a href="{{route('getEdit',$item->id)}}" class="btn btn-outline-warning">Sửa</a>
                    <a href="{{route('getDelete',$item->id)}}" class="btn btn-outline-danger">Xóa</a>
                </div>
            </div>
        </div>

    @endforeach
</div>

@endsection