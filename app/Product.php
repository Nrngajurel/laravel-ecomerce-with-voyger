<?php

namespace Nrn;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function catagories(){
        return $this->belongsToMany(Catagory::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
