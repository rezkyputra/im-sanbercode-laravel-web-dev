@extends('layouts.master')

@section('title')
    Pendaftaran
@endsection
@section('content')
<form action="/welcome" method="POST">
    @csrf
    <label >Fullname</label> <br>
    <input type="text" name="fullname" > <br> <br>
    <label >Address</label> <br>
    <textarea name="address" cols="30" rows="10"></textarea> <br> <br>

    <input type="submit" value="Daftar">
</form>
<a href="/">Kembali</a>
@endsection
   