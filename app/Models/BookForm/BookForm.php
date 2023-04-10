<?php

namespace App\Models\BookForm;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookForm extends Model
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
