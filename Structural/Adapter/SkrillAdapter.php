<?php

class SkrillAdapter implements Payment
{

   private $skrill;

   public function __construct(Skrill $skrill)
   {
      $this->skrill = $skrill;
   }

   public function pay($amount)
   {
      $this->skrill->doPayment($amount);
   }
}
