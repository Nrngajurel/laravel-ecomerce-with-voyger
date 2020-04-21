<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Order\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param OrderDetails $orderDetails
     * @param PaymentGateway $paymentGateway
     * @return void
     */



    public function store(OrderDetails $orderDetails,PaymentGateway $paymentGateway)
    {
        $order= $orderDetails->all();
        dd($paymentGateway->charge(500));
    }

    public function create()
    {
        return view('public.payment');
    }


}
