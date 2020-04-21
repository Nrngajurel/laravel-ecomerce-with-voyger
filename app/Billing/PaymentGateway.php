<?php

namespace Just/Test\Billing;

interface PaymentGateway
{
    public function setDiscount($amount);

    public function charge($amount);
}
