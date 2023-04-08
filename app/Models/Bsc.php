<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bsc extends Model
{
    use HasFactory;

    protected $fillable = [
        'BscStName',
        'BscStPhone',
        'BscStVeriPhone',
        'BscStCours',
        'BscStBooks',
        'BscStDistrict',
        'BscStArea',
        'BscStAddress',
        'BscStFee',
    ];

    // Define a relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
