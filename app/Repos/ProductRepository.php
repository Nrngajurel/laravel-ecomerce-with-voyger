<?php


namespace Nrn\Repos;


use Nrn\Components\DataFilters\ProductDataFilter;
use Nrn\Product;
use Illuminate\Database\Eloquent\Model;

class ProductRepository extends Repository
{
    public function __construct(Product $model, ProductDataFilter $filter)
    {
        parent::__construct($model,$filter);
    }

}