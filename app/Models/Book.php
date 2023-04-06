<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'BooksName',
        'BooksCategory',
        'BooksStatus',
        'BooksPrice',
    ];

    // Define a relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
