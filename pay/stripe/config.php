<?php
require_once('stripe-php-master/init.php');
$publishableKey = "pk_test_51HY3ZHIGb51k0BVejuX9y1493bSwB8fgKv59Ok7isYmmJOyPqGs5Wkwde9wZCFt96aphE8xpL3V2j4ShlDIIkUER00KspTnTDy";
$secretKey = "sk_test_51HY3ZHIGb51k0BVe58P8ENOOhtQGrneRnFwuiNP7hfp6xr1OgfrtJDyHqV9k6gVhXs5mqEjIndjr4auHqlWhwn7N00v35rMQNw";

\Stripe\Stripe::setApiKey($secretKey);
?>
