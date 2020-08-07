<?php

class PayPal
{

   public function sendPayment(int $amount)
   {
      echo "Paying via PayPal: " . $amount;
   }
}
