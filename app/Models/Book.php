<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        'authorID',
        'rating',
        'isbn',
        'rok_vydania',
        'nazov', 
        'popis',
        'adresa_obrazka'
    ];
}