@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cập Nhật</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
</div>
<form method="POST" acction="">
    @csrf
    <table>
    
        <tr>
        <th>TÊN: </th>
        <th><input type="text" name="ten" value="{{ $SP->ten }}"></th>
        <tr>
        <tr>
        <th>Số lượng: </th>
        <th><input type="int" name="so_luong" value="{{$SP->so_luong}}"></th>
        <tr>
        <tr>    
        <th>Tên loại sản phẩm: </th>
        <th>
            <select name='loai_san_pham_id'>
                @foreach($dsloai as $tenlsp){
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
        <th><input type="number" name="gia_ban" value="{{ $SP->gia_ban }}"></th>
        <tr>
        <tr>
        <th>Mô tả: </th>  
        <th><input type="text" name="mo_ta" value="{{ $SP->mo_ta }}"></th>
        <tr>
            
        <tr>
        <th><input type="submit" name="them" value="Cập Nhật"></th>
        <tr> 
    </table>
</form>
@endsection