<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Thema;
use App\Models\Author;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class BookController extends Controller
{
    //List all Books
    public function index(Request $request) {
        return view("books.index", [
        'heading' => 'Buchkollektion',
        'books' => Book::all()
        ]);
    }

    //Show single Book
    public function show(Book $book){
        return view ("books.show", [
            'book' => $book
        ]);
    }

    //Create Book Form
    public function create(){
        return view('books.create');
    }

    //Store Book Entry
    public function store(Request $request){
        $formFillable = $request->validate([
            'name' => ['required', Rule::unique('books', 'name')],
            'author' => 'required',
            'thema' => 'required',
            'distributor' => 'required',
            'distributor_adresse' => 'required',
            'description' => 'required'
        ]);

        //create entrys when not exist
        $author = Author::firstOrCreate(['name'=> $request['name']]); 
        $thema = Thema::firstOrCreate(["title" =>$request['thema']]);
        $dist = Distributor::firstOrCreate([
            "name" => $request['distributor']
        ],[
            'adresse' => $request['distributor_adresse']
        ]);

        $book = new Book();
        $book->name = $request['name'];
        $book->author()->associate($author);
        $book->thema()->associate($thema);
        $book->distributor()->associate($dist);
        $book->description = $request['description'];
        if($request->hasFile('cover'))
            {
                $book->cover = $request->file('cover')->store('covers', 'public');
            }

        $book->save();
        
       return redirect(route('INDEX'))->with('message', 'Buch wurde hinzugefügt');
    }

    public function getId($model, $table, $value) {
        try {
            return  $model::where($table, $value)->first()->id;
        } catch (\Throwable $th) {
            dd($th,'Fehler bei getID, namen richtig?');
        }
    }
 
}
