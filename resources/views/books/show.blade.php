<x-layout>
    <a href={{route('INDEX')}} class="btn btn-primary btn-md active" role="button" aria-pressed="true">Zurück</a>
    <div class="container-fluid text-center text-white">
        <div class="container">
            <img 
                src="{{$book->cover ? asset('storage/' . $book->cover) : asset('/images/no-image.gif')}}" 
                alt="" 
                class=""
            />
        </div>
      <h1>{{$book->name}}</h1>
      <h2>{{$book->thema->title}}</h2>
      <h3>{{$book->author->name}}</h3>
      <div class="container">
        <p>{{$book->description}}</p>
      </div>
    </div>
</x-layout>