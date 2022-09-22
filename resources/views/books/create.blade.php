<x-layout>
    <div class="container px-5">
        <div class="container text-white px-5">
            <h1 class="text-center">Buch hinzufügen</h1>
            <form action={{route('STORE_NEW_BOOK')}} method="post" class="px-5">
                @csrf
                    <div class="col">
                        <div class="mb-3">
                            <label for="name" class="form-label">Buchname</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
                            <label for="author" class="form-label">Author</label>
                            <input type="text" name="author" id="author" class="form-control" placeholder="" aria-describedby="helpId">
                            <label for="thema" class="form-label">Thema</label>
                            <input type="text" name="thema" id="thema" class="form-control" placeholder="" aria-describedby="helpId">
                            <p class="form-text text-muted">
                                Bitte mit Komma trennen
                            </p>
                            <label for="distributor" class="form-label">Verlags Adresse</label>
                            <input type="text" name="distributor" id="distributor" class="form-control" placeholder="" aria-describedby="helpId">
                            <label for="distributor_adresse" class="form-label">Verlags Adresse</label>
                            <input type="text" name="distributor_adresse" id="distributor_adresse" class="form-control" placeholder="" aria-describedby="helpId">
                            <div class="mb-3">
                                <label for="description" class="form-label">Beschreibung</label>
                              <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Eintragen</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</x-layout>