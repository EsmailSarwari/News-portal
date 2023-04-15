@extends('layout.dersPortal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6>Yeni Haber Ekle</h6>
                <form action="{{ 'insert' }}" method="POST" class="form-group">
                    @csrf
                    <textarea class="form-control" name="title" id="" placeholder="title"></textarea> <br>
                    <textarea class="form-control" name="summary" id="" placeholder="summary"></textarea> <br>
                    <textarea class="form-control" name="content" id="" placeholder="content" style="height: 200px"></textarea> <br>
                    <button type="submit" class="btn btn-dark">send</button>
                </form>
            </div>
        </div>
    </div>
@endsection('content')
