@extends('layout.newsPortal')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h6>Haber Guncelleme</h6>
                <form action="  " method="POST" class="form-group">
                    @csrf
                    <label for="">Category</label>
                    <select class="form-control mb-5" name="category_id" id="">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($category->id == $editNews->category_id) selected @endif>{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <label for="">Title</label>
                    <input class="input form-control" type="text" name="title" value="{{ $editNews->title }}"> <br>

                    <label for="">Summary</label>
                    <textarea class="input form-control" name="summary"> {{ $editNews->summary }} </textarea> <br>

                    <label for="">Content</label>
                    <textarea class="input form-control" name="content"
                              style="height: 300px"> {{ $editNews->content }} </textarea> <br>
                    <input type="submit" value="guncelle" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

@endsection('content')
