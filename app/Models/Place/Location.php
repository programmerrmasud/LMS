<?php

namespace App\Models\Place;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable =[
        'district_id',
        'location_name'
    ];

    public function Districts()
    {
        $this->belongsTo(District::class);
    }
}
