<?php

namespace Nrn;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
