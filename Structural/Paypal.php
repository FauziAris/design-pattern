<?php
require_once './PaymentAdapter.php';
class PayPal implements PaymentAdapter
{
   private $payPal;

   public function __construct(PayPal $paypal)
   {
      $this->paypal = $paypal;
   }
   public function addItem($itemName)
   {
   }
   public function addPrice($amount)
   {
   }
}
