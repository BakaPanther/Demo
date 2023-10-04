@extends('layout')
@section('content')

<h1 class="h2">Thêm Sản phẩm</h1>
<form method="POST" acction="" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
        <th>TÊN: </th>
        <th><input type="text" name="ten"></th>
        <tr>
        <tr>
        <th>Số lượng: </th>
        <th><input type="number" name="so_luong" ></th>
        <tr>
        <tr>
        <th>Tên loại sản phẩm: </th>
        <th>
            <select name='loai_san_pham_id'>
                @foreach($lSanPham as $tenlsp){
                <option value='{{$tenlsp->id}}'>
                    {{$tenlsp->ten}}
                </option>
                }
                @endforeach
            </select>
        </th>
        <tr>
        <tr>
        <th>Giá bán: </th>
        <th><input type="number" name="gia_ban" ></th>
        <tr>
        <tr>
        <th>Mô tả: </th>  
        <th><input type="text" name="mo_ta"></th>
        <tr>
        <div class="mb-3">
            <label for="formFile" class="form-label">Chọn ảnh</label>
            <input class="form-control" type="file" multiple name="hinh_anh[]">
            <button type="submit">Upload</button>
        </div>
        <tr>
        <th><input type="submit" name="them" value="Thêm mới"></th>
        <tr> 
    </table>
</form>
@endsection