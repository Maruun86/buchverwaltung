<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ManageController extends Controller
{
    //
    public function manage_statistic(){
            
        return view("manage.manage_statistic", [
        'books' => Book::all()
        ]);
    }
}
