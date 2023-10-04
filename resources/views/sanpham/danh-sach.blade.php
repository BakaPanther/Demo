@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Danh Sách Sản Phẩm</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('sanpham.them-moi')}}" type="button" class="btn btn-sm btn-outline-secondary">Thêm mới</a>
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

        <th>Tên Sản Phẩm</th>
        <th>Loại Sản Phẩm</th>
        <th>Số lượng</th>
        <th>Giá bán</th>
        <th>Mô tả</th>
        <th>Đường dẫn</th>
        <th>Edit</th>
    </tr>
    @foreach($dsSanPham as $l)
    <tr>
        <th>{{$l->ten}}</th>
        <th>{{$l->loai_san_pham->ten}}</th>
        <th>{{$l->so_luong}}</th>
        <th>{{$l->gia_ban}}</th>
        <th>{{$l->mo_ta}}</th>
        <th>
            @foreach($HinhAnh as $ha)
            @if($ha->san_pham_id==$l->id)
            <img src="{{asset($ha->duong_dan)}}" style="width:50px" />
            @endif
            @endforeach
        </th>

        <th><a href="{{route('sanpham.xoa',['id'=>$l->id])}}">Xóa</a> | <a
                href="{{ route('sanpham.cap-nhat',['id'=>$l->id]) }}">Sửa</a></th>
    </tr>
    @endforeach

</table>
@endsection