@foreach($news as $newsItem)
     <h1>{{$newsItem->title}}</h1>
    <h3>{{$newsItem->summary}}</h3>
     <a href="/db/details/{{ $newsItem->id }}">details</a>
     <hr/>
@endforeach










