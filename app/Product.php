<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = ['title', 'description', 'image_url', 'price'];


    public function getImageAttribute()
    {
        return asset('storage/' . $this->image_url);
    }
}