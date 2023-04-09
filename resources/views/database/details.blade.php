
<h1>{{ $newsDetails->title}}</h1>
<p>{{$newsDetails->content}}</p>

<a href="/db/delete/{{$newsDetails->id}}" style="color: red"> haberi sil</a>
<a href="/db/edit/{{ $newsDetails->id }}" style="color: dodgerblue">Haberi guncelle</a>









