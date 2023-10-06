<?php
namespace Netzkollektiv\EasyCreditPreventCapture\Plugin;

use Netzkollektiv\EasyCredit\Model\Payment;

class PreventCapture {
    public function aroundCapture(Payment $payment, callable $proceed)
    {  
        return $payment;
    }
}
