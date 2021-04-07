<?php
require('config.php');
if(isset($_POST['stripeToken'])){
    \Stripe\Stripe::setVerifySslCerts(false);
    $token = $_POST['stripeToken'];
    $data = \Stripe\Charge::create(array(
        "amount"=>$_POST['payeramount'],
        "currency"=>"inr",
        "description"=>"Mohit has best tea stall in the market",
        "source"=>$token,
    ));
    echo "<pre>";
    print_r($data);
}else{
    echo "Token not set";
}
?>