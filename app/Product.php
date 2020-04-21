<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catagories(){
        return $this->belongsToMany('App\Catagory');
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
        
    }
}
