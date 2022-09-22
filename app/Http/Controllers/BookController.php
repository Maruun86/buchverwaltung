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
        $formFields = validator([
            'name' => ['required', Rule::unique('books', 'name')],
            'author' => 'required',
            'thema' => 'required',
            'distributor' => 'required',
            'distributor_adresse' => 'required',
            'description' => 'required'
        ]);
        //create entrys when not exist and get id
       $resultAuthor = Author::where("name", $request['name'])->exists();
       if (!$resultAuthor){
            Author::create(
                [
                'name' => $request['name'],             
                ]);
            }
       $resultThema = Thema::where("title", $request['thema'])->exists();
       if (!$resultThema){
            Thema::create([
                'title' => $request['thema']
        ]);
       }
      
       $resultDistributor = Distributor::where("name", $request['distributor'])->exists();
       if (!$resultDistributor){
            Distributor::create([
                'name' => $request['distributor'],
                'adresse' => $request['distributor_adresse']
            ]);
       }
       $fillable = [
            'name' => $request['name'],
            'author_id' => $this->getId('App\Models\Author', 'name', $request['name']),
            'thema_id' =>  $this->getId('App\Models\Thema', 'title', $request['thema']),
            'distributor_id' => $this->getId('App\Models\Distributor', 'name', $request['distributor']),
            'description' =>  $request['description']
       ];   
       Book::create($fillable);

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
