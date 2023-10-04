@extends('layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cập Nhật Loại Sản Phẩm</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
</div>
<form method="POST" acction="">
    @csrf
    <table>
        <tr>
        <th>TÊN: </th>
        <th><input type="text" name="ten" value="{{ $LSP->ten }}"></th>
        <tr>
        <th><input type="submit" name="them" value="Cập Nhật"></th>
        <tr> 
    </table>
</form>
@endsection