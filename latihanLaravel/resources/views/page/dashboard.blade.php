@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    
<h1>Welcome {{$fullname}}</h1>
<p>Alamat anda {{$address}} </p>
@endsection