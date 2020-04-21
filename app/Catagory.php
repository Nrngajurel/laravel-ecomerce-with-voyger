<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function products(){
        return $this->belongsToMany('Just/Test\Product');
    }
}
