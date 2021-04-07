<?php
session_start();
$t_data = $_GET;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        body,html{
            background-color:#eee;
        }
        #message-box{
            width:500px;
            height:auto;
            background-color:#fff;
            margin:100px auto;
            padding:10px 0;
        }
        #message-box h1{
            width:100%;
            text-align:center;
            color:green;
            margin:20px auto;
        }
        #message-box > table{
            width:90%;
            margin:10px auto;
            border-collapse:collapse;
        }
        #message-box > table td{
            border:1px solid #d9d9d9;
            padding:10px;
            width:50%;
        }
    </style>
</head>
<body>
    <div id="message-box">
        <h1>Payment Successful</h1>
        <table>
        <tr>
            <td>Transaction ID</td><td><?php echo $t_data['payment_id']?></td>
        </tr>
        <tr>
            <td>Card Type</td><td><?php echo $t_data['payment_status']?></td>
        </tr>
        <tr>
            <td>Amount</td><td><?php echo $_SESSION['amount']?></td>
        </tr>
        <tr>
            <td>Time</td><td><?php echo $_SESSION['time']?></td>
        </tr>
        </table>
    </div>
</body>
</html>