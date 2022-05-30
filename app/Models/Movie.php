<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_title',
        'movie_time',
        'movie_cinema',
        'movie_date',
        'movie_description',
        'movie_genre',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
