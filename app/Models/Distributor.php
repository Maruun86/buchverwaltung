<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['name', 'adresse'];

    //Relationship to Book
    public function books()
    {
        return $this->hasMany(Book::class, 'distribution_id');
    }
}
