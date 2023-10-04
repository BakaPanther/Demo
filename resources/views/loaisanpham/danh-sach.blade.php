@extends ('layout')
@section ('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Danh Sách Loại Sản Phẩm</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('loaisanpham.them-moi')}}" type="button" class="btn btn-sm btn-outline-secondary">Thêm
                mới</a>
        </div>
    </div>
</div>
@if(session('thong-bao'))
  <script>
    Swal.fire("{{session('thong-bao')}}")
  </script>
@endif
<table border=1px>
    <th>Tên Sản Loại Phẩm</th>
    <th>#</th>
    @foreach($dsLSanPham as $lsp)
        <tr>
            <th>{{$lsp->ten}}</th>
            <th><a href="{{route('loaisanpham.xoa',['id'=>$lsp->id])}}">Xóa</a> | <a
                href="{{ route('loaisanpham.cap-nhat',['id'=>$lsp->id]) }}">Sửa</a></th>

        </tr>
        @endforeach
</table>
@endsection