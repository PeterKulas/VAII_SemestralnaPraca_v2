<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;
    use HasFactory;
    
    protected $primaryKey = "id_author";

    protected $fillable = [
        'id_author',
        'firstname',
        'lastname'
    ];
}