<?php

interface Payment
{
   public function addItem($itemName);
   public function addPrice($amount);
}
