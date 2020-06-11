<?php


namespace Nrn\Components\Billing;


use Illuminate\Support\Str;

class EsewaPaymentGateway implements PaymentGateway
{
    private $currency;
    private $discount=0;
    public function __construct($currency)
    {
        $this->currency= $currency;
    }
    public function setDiscount($amount){
        $this->discount= $amount;

    }

    public function charge($amount){
        return[
          'amount'=>$amount,
          'discount'=>$this->discount,
            'total'=>$amount- $this->discount,
          'code'=>Str::random(),
            'currency' => $this->currency,
            'via'=>'Esewa',
            'cashback'=>$amount*0.02,
        ];
    }



}
