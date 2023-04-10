<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookform extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'veriphone',
        'district',
        'area',
        'address',
        'course',
        'batch',
        'book',
        'session',
        'SubmitTime',
        'fee',
    ];
}
