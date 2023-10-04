@extends('layout')
@section('content')

<h1 class="h2">Thêm Sản phẩm</h1>
<form method="POST" acction="" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <th>TÊN loại sản phẩm: </th>
            <th><input type="text" name="ten"></th>
            <th><input type="submit" name="them" value="Thêm mới"></th>
        </tr>
    </table>
</form>
@endsection