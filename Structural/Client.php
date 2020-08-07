<?php

require_once './Payment.php';
require_once './PayPal.php';
require_once './Skrill.php';
require_once './PaypalAdapter.php';
require_once './SkrillAdapter.php';

// paypal
$paypal = new paypalAdapter(new PayPal());
$paypal->pay('45000');

echo "<br>";
// money booker
$moneybooker = new SkrillAdapter(new Skrill());
$moneybooker->pay('45000');
