<x-layout>
    <a href={{route('INDEX')}} class="btn btn-primary btn-md active" role="button" aria-pressed="true">Zurück</a>
    <div class="container-fluid text-center text-white">
        <div class="container py-2">
          <img 
          src="{{$book->cover ? asset('storage/' . $book->cover) : asset('images/no-image.gif')}}" 
          alt="" 
          class=""
          />
        </div>
      <h1>{{$book->name}}</h1>
      <h2>Thema: {{$book->thema->title}}</h2>
      <h3>Author: {{$book->author->name}}, {{$book->distributor->name}}</h3>
      <div class="container">
        <p>{{$book->description}}</p>
      </div>
    </div>
    <a href={{route('EDIT_BOOK', $book)}} class="btn btn-primary btn-md active" role="button" aria-pressed="true">Edit</a>
</x-layout>