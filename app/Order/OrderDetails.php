<?php

namespace  App\Order;

use App\Billing\PaymentGateWayContract;

class  OrderDetails{

    private  $paymentGateWay;

    public function __construct(PaymentGateWayContract $paymentGateWay)
    {
        $this->paymentGateWay = $paymentGateWay;
    }

    public function all(){
        $this->paymentGateWay->setDiscount(500);

        return [
            'name' => 'Victor',
            'address' => '123 Coder\'s tape street'
        ];
    }
}
