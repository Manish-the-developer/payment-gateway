<?php
require_once('config.php');
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
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        body,html{
            background-color:#eee;
        }
        h1{
            text-align:center;
            margin-top:50px;
            font-family:Arial;
        }
        #pay-form{
            width:50%;
            margin:50px auto;
            background-color:#fff;
            padding:10px;
        }
        #pay-form table{
            width:100%;
        }
        #pay-form table tr td{
            width:100%;
        }
        #pay-form table tr td input{
            width:100%;
            margin:5px auto;
            padding:10px 15px;
            outline:none;
            border:1px solid #d9d9d9;
            font-size:16px;
        }
    </style>
</head>
<body>
<h1>Payment Page</h1>
<form action="submit.php" method="POST" id="pay-form">
    <table>
        <tr>
            <td><input type="text" name="payername" placeholder="Your Name" required/>
        </tr>
        <tr>
            <td><input type="text" name="receiver" placeholder="Mohit Tea Stall" disabled="disabled"/>
        </tr>
        <tr>
            <td><input type="text" name="payeremail" placeholder="Your Email" required/>
        </tr>
        <tr>
            <td><input type="number" name="payeramount" placeholder="Enter The Amount" required/>
        </tr>
        <tr>
        <td>
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key = "<?php echo $publishableKey ?>"
        data-amount = ""
        data-name = "Mohit Store"
        data-description = "Best Tea stall in whole burari market"
        data-image = "../stripe/media/pay.jpg"
        data-currency =  "INR"
        data-email = "manish.sh1985@gmail.com"
    >
    </script>
    </td>
    </tr>
    </table>
</form>
</body>
</html>
