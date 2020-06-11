<?php


namespace Nrn\Components\DataFilters;


use Illuminate\Database\Eloquent\Builder;

abstract class Datafilter
{
    protected $builder;
    protected $neutral_params = [];
    protected $sorting_method = [
        'newest'=>'sort_by_newest'
    ];
    protected $per_page;
    protected $default_per_page=20;
    protected $max_per_page=40;
    public function setBuilder(Builder $builder)
    {
        $this->builder=$builder;
    }
    public function buildQuery()
    {
        foreach (app('request')->query() as $key=>$value){
            if(!empty($key)){

                if(method_exists($this, $key)){
                    call_user_func_array([$this, $key],[$key,$value]);
                }elseif (!isset($this->neutral_params[$key])){
                    call_user_func_array([$this,'defaultMethods'],[$key,$value]);
                }
            }
        }
    }

    public function getData()
    {
        $this->per_page('per_page',$this->per_page);
        $paginator= $this->builder->paginate($this->per_page);
        $paginator->appends(app('request')->query());
        return $paginator;
    }
    public function setCriteria(array $criteria=[])
    {
        foreach ($criteria as $key=>$value){
            if (!empty($key)){
                call_user_func_array([$this, $key],[$key, $value]);
            }
        }

    }
//sort data
    public function sort($key,$value)
    {
        if(method_exists($this, $this->sorting_method[$value])){
            $method=$this->sorting_method[$value];
            call_user_func_array([$this, $method],[]);
        }
    }

//    Sort By Newest
    public function sort_by_newest()
    {
        $this->builder->orderBy('created_at','desc');
    }

    public function per_page($key,$value)
    {
        if(!empty($key)){
            $this->per_page = $value<= $this->max_per_page?$value: $this->max_per_page;
        }else{
            $this->per_page = $this->default_per_page;
        }
    }
    abstract function defaultMethods($key,$value);

}