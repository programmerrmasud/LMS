<?php

namespace App\Models\Place;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable =[
        'district'
    ];
    
    public function Locations()
    {
        $this->hasMany(Location::class);
    }
}
