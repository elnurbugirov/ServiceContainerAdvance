<?php

namespace App\Billing;

interface PaymentGateWayContract
{
    public function setDiscount($amount);

    public function charge($amount);
}
