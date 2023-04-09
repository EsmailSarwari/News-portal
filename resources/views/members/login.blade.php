@extends('layout.app')
@section('title')
    Giris
@endsection('title')
@section('content')
    <h1>Uye girisi</h1>
    <form action="{{('loggedIn')}}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" id=""> <br>
        <input type="password" name="password" placeholder="Password" id=""> <br>
        <input type="submit" value="submit"></form>
@endsection('content')

