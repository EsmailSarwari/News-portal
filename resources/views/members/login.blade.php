@extends('layout.app')
@section('title')
    Giris
@endsection('title')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5>Uye girisi</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 form-group">
                <form action="{{('loggedIn')}}" method="POST">
                    @csrf
                    <input class="form-control" type="email" name="email" placeholder="Email" id=""> <br>
                    <input class="form-control" type="password" name="password" placeholder="Password" id=""> <br>
                    <input class="btn btn-primary" type="submit" value="submit"></form>
            </div>
        </div>


    </div>
@endsection('content')

