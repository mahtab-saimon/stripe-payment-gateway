<?php
    require_once('stripe-php/init.php');

    $stripe = [
        "secret_key" => "sk_test_51HWKpAFyTDC8KZ0rEEejPtnwLmXe15JCuZKyHHL32dXzepWh3MRGfrBgWZdwmHrpHkCyFURmG79JoyYBSXoJbiIS0092VXkEHn",
        "publishable_key"      => "pk_test_51HWKpAFyTDC8KZ0r4R5FW15PPM5NQjb8acC9ItPHoMtScePrCWs9vxoRwPqvtVehkNMxquRKzDKTTUM5AsFlZMSH00yn4DJwqQ",
    ];

    \Stripe\Stripe::setApiKey($stripe['secret_key']);
?>