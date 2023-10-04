@extends('layout')
@section('content')

<h1 class="h2">Thêm Nhà Cung Cấp</h1>
<form method="POST" acction="" enctype="multipart/form-data">
    @csrf
    <table>
    <tr>
        <th>TÊN: </th>
        <th><input type="text" name="ten"></th>
        <tr>
        <tr>                                                                          
        <th>Địa chỉ: </th>
        <th><input type="text" name="dia_chi" ></th>
        <tr>
        <tr>
        <th>Số điện thoại: </th>
        <th><input type="tel" name="so_dien_thoai" >
        </th>
        <tr>
        <tr>
        <th>Email: </th>
        <th><input type="email" name="email" ></th>
        <tr>
        <th><input type="submit" name="them" value="Thêm mới"></th>
        <tr> 
    </table>
</form>
@endsection