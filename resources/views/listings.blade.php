<h1>{{$heading}}</h1>

@foreach ($listings as $listing)
    <h1>
       <a href="/find/{{$listing['id']}}">{{$listing['title']}} </a>
    </h1>
    <p>{{$listing['description']}}</p>
@endforeach
