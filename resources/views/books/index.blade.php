

<x-layout>
    @include('partials._nav')
    @if (\Session:: has('message'))
    <div class="container alert alert-success">
        <ul>
            <li>{!! \Session::get('message') !!}</li>
        </ul>
    </div>
    @endif
    <div class="row">
        @foreach($books as $book)
            <x-book-card :book="$book"/>
        @endforeach
    </div>      
</x-layout>