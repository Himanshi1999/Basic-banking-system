`<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banking System</title>
        <!-- main css-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <div class="container-transfer">
            <div class="navbar">
                <!--logo-->
                <a href="./index.html" class="logo">BANK</a>
                <!--menu-->
                <ul >
                    <li><a href="./index.html" >Home</a></li>
                    <li><a href="./customer.php">Customer</a></li>
                    <li><a href="./transfer.php">Transfer</a></li>
                    <li><a href="./transaction.php">Transaction</a></li>
                </ul>
                <!--bars--------------->
                <div class="toggle"></div>
            </div>
            <div class="transfer">
                <h3>Transfer Money</h3>
                <form action="moneytransfer.php" method="post">
                    <label for="from">Transaction Id: </label>
                    <input type="text" id="tid" name="tid" value="<?php
                    $tid =  "REF" . rand(10000,99999999) ;
                    echo $tid ;
                    ?>" ><br><br>

                    <label for="from">FROM: </label>
                    <input type="text" id="sender" name="sender" ><br><br>
                    <label for="to">TO:</label>
                    <input type="text" id="receiver" name="receiver" ><br><br>
                    <label for="amount">Rs:</label>
                    <input type="text" id="Amount" name="Amount" ><br><br>
                    <button class="transfer-button" >SEND</button>

                </form>

            </div>

            <div class="footer">
                <p>About this page</p>
                <!--paragraph-->
                <p>This website is coded in HTML, CSS, and Javascript. It is hosted on Github. You can find code <a href="https://github.com/Himanshi1999/Basic-banking-system" >here</a>.</p>
                <!--copyright-->
                <p class="copyright">Copyright by Himanshi </p>
            </div>
        </div>
    </body>
</html>
