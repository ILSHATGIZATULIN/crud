<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $fillable = ['title', 'description', 'image_url', 'price'];


    public function getImageAttribute()
    {
        $imagePath = $this->image_url ?'storage/' .  $this->image_url: 'images/si2.jpg';

        return asset( $imagePath);
    }

    public function getFinalpriceAttribute()
    {
        return $this->price . 'РУБ';
    }
}