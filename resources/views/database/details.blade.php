@extends('layout.newsPortal')

@section('content')

    <h3>{{$newsDetails->title}} <sapn class="badge bg-info" >{{ $newsDetails->Category->name }}</sapn></h3>
    <h6>{{ $newsDetails->summary}}</h6>
    <p>{{$newsDetails->content}}</p>

    <a href="/db/delete/{{$newsDetails->id}}" class="btn btn-outline-danger"> haberi sil</a>
    <a href="/db/edit/{{ $newsDetails->id }}" class="btn btn-outline-secondary">haber guncelle</a>
@endsection('content')








