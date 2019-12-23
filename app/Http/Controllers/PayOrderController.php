<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateWayContract;
use App\Order\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function  store(OrderDetails $orderDetails, PaymentGateWayContract $paymentGateWay){

        $order = $orderDetails->all();

        dd($paymentGateWay->charge('2500'));
    }
}
