<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    // Predispongo il modello a ricevere i dati
    protected $fillable = ["title", "album", "author", "editor", "length", "poster"];
}
