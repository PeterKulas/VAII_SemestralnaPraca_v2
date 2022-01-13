<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $primaryKey = "publisherID";
    
    protected $fillable = [
        'publisherID',
        'publisher'
    ];
}