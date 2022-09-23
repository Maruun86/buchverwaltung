<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //Relationship to Book
    public function books()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
    //Relationship to User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
