@extends('layout.newsPortal')

@section('content')
    @if($errors->isNotEmpty())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <ul>
                    <li> {{$error}} </li>
                </ul>
            @endforeach
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6>Yeni Haber Ekle</h6>
                <form action="{{ 'insert' }}" method="POST" class="form-group">
                    @csrf
                    <label> category</label>
                        <select name="category_id" class="form-control mb-5">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name }} </option>
                            @endforeach
                        </select>
                    <label for="">title</label>
                    <textarea class="form-control @if(in_array('title', $errors-> keys())) is-invalid @endif"
                              name="title" id="" placeholder="title">{{ old('title') }}</textarea> <br>

                    <label for="">Summary</label>
                    <textarea class="form-control @if(in_array('summary', $errors-> keys())) is-invalid @endif"
                              name="summary" id="" placeholder="summary">{{ old('summary') }}</textarea> <br>

                    <label for="">Content</label>
                    <textarea class="form-control @if(in_array('content', $errors-> keys())) is-invalid @endif"
                              name="content" id="" placeholder="content"
                              style="height: 200px">{{ old('content') }}</textarea> <br>

                    <button type="submit" class="btn btn-dark">send</button>
                </form>
            </div>
        </div>
    </div>
@endsection('content')


