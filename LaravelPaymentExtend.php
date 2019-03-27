<?php


namespace LaravelPayment\PayoutPayeer;


use LaravelPayment\Manager\Events\PaymentServiceBooted;

class LaravelPaymentExtend
{
    public function handle(PaymentServiceBooted $paymentBooted)
    {
        $paymentBooted->extendService('payeer', __NAMESPACE__ . '\Provider');
    }
}
