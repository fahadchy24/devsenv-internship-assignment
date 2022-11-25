<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'image',
        'description',
    ];

    public function getImageAttribute($value)
    {
        if (empty($value)) {
            return [];
        }

        return explode(';', $value);
    }
}
