@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Danh Sách Hóa Đơn</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('khachhang.them-moi')}}" type="button" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
        </div>
    </div>
</div>
@if(session('thong-bao'))
  <script>
    Swal.fire("{{session('thong-bao')}}")
  </script>
@endif
@if(session('message'))
  <script>
    Swal.fire("{{session('message')}}")
  </script>
@endif
<table border=1px>
    <tr>

        <th>Tên Khách Hàng</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>#</th>
    </tr>
    @foreach($khachhang as $kh)
    <tr>
        <th>{{$kh->ten}}</th>
        <th>{{$kh->dia_chi}}</th>
        <th>{{$kh->so_dien_thoai}}</th>
        <th>{{$kh->email}}</th>
        <th><a href="{{route('khachhang.xoa',['id'=>$kh->id])}}">Xóa</a> | <a
                href="{{ route('khachhang.cap-nhat',['id'=>$kh->id]) }}">Sửa</a></th>
    </tr>
    @endforeach

</table>
@endsection