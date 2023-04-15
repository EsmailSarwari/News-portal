@extends('layout.dersPortal')

@section('content')
<h3>{{$newsDetails->title}}</h3>
<h6>{{ $newsDetails->summary}}</h6>
<p>{{$newsDetails->content}}</p>

<a href="/db/delete/{{$newsDetails->id}}" class="btn btn-outline-danger"> dersi sil</a>
<a href="/db/edit/{{ $newsDetails->id }}" class="btn btn-outline-secondary" >dersi guncelle</a>
@endsection('content')








