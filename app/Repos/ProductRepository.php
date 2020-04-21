<?php


namespace App\Repos;


use App\Components\DataFilters\ProductDataFilter;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class ProductRepository extends Repository
{
    public function __construct(Product $model, ProductDataFilter $filter)
    {
        parent::__construct($model,$filter);
    }

}