<?php

namespace Nrn\Components\Billing;

interface PaymentGateway
{
    public function setDiscount($amount);

    public function charge($amount);
}
