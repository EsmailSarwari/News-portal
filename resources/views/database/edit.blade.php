@extends('layout.newsPortal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6>Haber Guncelleme</h6>
                <form method="POST" class="form-group">
                    @csrf
                    <input class="input form-control" type="text" name="title" value="{{ $editNews->title }}"> <br>
                    <textarea class="input form-control" name="summary"> {{ $editNews->summary }} </textarea> <br>
                    <textarea class="input form-control" name="content"
                              style="height: 300px"> {{ $editNews->content }} </textarea> <br>
                    <input type="submit" value="guncelle" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

@endsection('content')
