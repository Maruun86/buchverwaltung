@props(['book'])

<div class="col-sm-4 bg-black text-white text-center border">
    <div class="row ">
        <div class="col-sm py-2">
            <a href={{route('SHOW_BOOK', $book)}}>
                <img 
                src="{{$book->cover ? asset('storage/' . $book->cover) : asset('images/no-image.gif')}}" 
                alt="" 
                class=""
                />
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm text-center">
            <h3>
                <a href={{route('SHOW_BOOK', $book)}}>
                    <h3>{{$book->name}}</h3>
                    <h5>{{$book->thema->title}}</h6>
                    <h6>{{$book->author->name}}</h5>
                </a>
            </h3>
        </div>
    </div>
</div>
