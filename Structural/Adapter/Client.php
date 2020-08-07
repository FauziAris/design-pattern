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
// Skrill
$skrill = new SkrillAdapter(new Skrill());
$skrill->pay('45000');
