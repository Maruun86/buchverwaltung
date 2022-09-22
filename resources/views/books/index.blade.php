

<x-layout>
    <div class="row">
        @foreach($books as $book)
            <x-book-card :book="$book"/>
        @endforeach
    </div>      
</x-layout>