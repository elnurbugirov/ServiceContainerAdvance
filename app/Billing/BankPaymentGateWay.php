<?php

namespace App\Billing;


use Illuminate\Support\Str;

class BankPaymentGateWay implements PaymentGateWayContract
{
    private $currency;
    private  $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount($amount){
        $this->discount = $amount;
    }

    public function charge($amount){

        //Charge the bank
        return [
            'amount' => $amount- $this->discount,
            'confirmation_nubmer' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
        ];
    }
}
