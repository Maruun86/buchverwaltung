<x-layout>
        <div class="container px-5">
            <div class="container text-white px-5">
                <h1 class="text-center">Buch editieren</h1>
                <form action={{route('EDIT_CONFIRM')}} method="put" enctype="multipart/form-data" class="px-5" >
                    @csrf
                        <div class="col">
                            <div class="mb-3">
                                <label for="name" class="form-label">Buchname</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value={{$book->name}}>
                                <label for="thema" class="form-label">Thema</label>
                                <input type="text" name="thema" id="thema" class="form-control" placeholder="" aria-describedby="helpId"value={{$book->thema->title}}>
                                <p class="form-text text-muted">
                                    Bitte mit Komma trennen
                                </p>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Beschreibung</label>
                                    <textarea class="form-control" name="description" id="description" rows="5">value={{$book->description}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <img 
                                    src="{{$book->cover ? asset('storage/' . $book->cover) : asset('images/no-image.gif')}}" 
                                    alt="" 
                                    class=""
                                    /> <br>
                                  <label for="cover" class="form-label">Buchbild</label>
                                  <input type="file" class="form-control" name="cover" id="cover" placeholder="" aria-describedby="fileHelpId" value={{$book->cover}}>
                                </div>
                                <button type="submit" class="btn btn-primary">Eintragen</button>
                            </div>
                        </div>
                </form>
            </div>
        </div> 
</x-layout>