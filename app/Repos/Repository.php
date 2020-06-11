<?php


namespace Nrn\Repos;


use Nrn\Components\DataFilters\Datafilter;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    /**
     * @var Model
     * @var Datafilter
     */
    protected $model;
    protected $filter;
    protected $relations=[];

    public function __construct(Model $model, Datafilter $filter)
    {
        $this->model = $model;
        $this->filter = $filter;
    }

    public function relations(array $relations)
    {
        return $this->relations= $relations;

    }

    public function search(array $criteria=[])
    {
        $this->filter->setBuilder($this->model->with($this->relations));
        $this->filter->setCriteria($criteria);
        $this->filter->buildQuery();
        return $this->filter;
    }

}