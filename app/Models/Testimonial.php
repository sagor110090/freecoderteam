<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'designation', 'rating'];

    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }

}
