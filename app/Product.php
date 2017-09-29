<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Review;

class Product extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price', 'category', 'language', 'pages', 'publisher','year'];

    public function review(){
        return $this->hasMany('App\Review');
    }

}

