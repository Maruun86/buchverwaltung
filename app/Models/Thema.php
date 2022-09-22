<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thema extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['title'];
        //Relationship to Book
        public function books()
        {
            return $this->hasMany(Book::class, 'thema_id');
        }
}
