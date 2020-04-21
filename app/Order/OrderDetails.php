<?php
namespace Just/Test\Order;
use Just/Test\Billing\PaymentGateway;

class OrderDetails
{
    private $paymentGateway;
    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }
    public function all(){
        $this->paymentGateway->setDiscount(random_int(1,100));
        return [
           'name'=>'Narayan'
        ];
    }

}
