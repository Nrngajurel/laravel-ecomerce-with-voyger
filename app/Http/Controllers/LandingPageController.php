<?php

namespace Nrn\Http\Controllers;
use Nrn\Repos\ProductRepository;
class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductRepository $repository)
    {

        $featuresProduct = $repository->search()->getData();

        return view('public.LandingPage', compact('featuresProduct'));
    }


}
