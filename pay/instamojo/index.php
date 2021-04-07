<?php
session_start();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_818000d27bfe44dbabdcea388d7",
                  "X-Auth-Token:test_26d15e13067b2673be184d3b6f2"));
$payload = Array(
    'purpose' => 'Buy Product',
    'amount' => '250',
    'phone' => '9999999999',
    'buyer_name' => 'Manish Sharma',
    'redirect_url' => 'http://192.168.43.129/pay/instamojo/redirect.php',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'manish.sh1985@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response = json_decode($response);
$_SESSION['amount'] = $response->payment_request->amount;
$_SESSION['time'] = $response->payment_request->created_at;
$_SESSION['T_ID'] =$response->payment_request->longurl;
header('location:'.$response->payment_request->longurl)
?>

