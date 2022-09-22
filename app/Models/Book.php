<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
   
    protected $fillable = ['name','cover', 'thema_id','author_id', 'distributor_id', 'description'];
    public $timestamps = false;
    use HasFactory;

        //Relationship to Author
        public function author()
        {
            return $this->belongsTo(Author::class, 'author_id');
        }
        //Relationship to Thema
        public function thema()
        {
            return $this->belongsTo(Thema::class, 'thema_id');
        }
        //Relationship to Distributor
        public function distributor()
        {
            return $this->belongsTo(Distributor::class, 'distributor_id');
        }
}
