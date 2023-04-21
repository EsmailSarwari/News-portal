@extends('layout.newsPortal')

@section('content')
    @foreach($news as $newsItem)
        <h4>{{$newsItem->title}}</h4>
        <h6>{{$newsItem->summary}}</h6>
        <a href="/db/details/{{ $newsItem->id }}" class="btn btn-outline-warning">details</a>
        <hr/>
    @endforeach
    {{ $news->Links() }}
@endsection('content')










