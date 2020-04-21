<?php


namespace App\Billing;


use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGateway
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
            'via'=>'Bank',
        ];
    }



}
