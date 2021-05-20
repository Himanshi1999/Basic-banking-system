<!DOCTYPE html>
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
        <div class="container">
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
            <div class="transaction">
                <table>
                    <caption>Transaction History</caption>
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">FROM</th>
                        <th scope="col">TO</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">DATE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php include "config.php";
                      $result = mysqli_query($con,"SELECT * from moneytransfer");
                      while($row = $result->fetch_assoc()){
                      ?>

                      <tr>
                        <td data-label="tid"><?php echo $row['tid'] ?></td>
                        <td data-label="sender"><?php echo $row['sender'] ?></td>
                        <td data-label="receiver"><?php echo $row['receiver'] ?></td>
                        <td data-label="Amount"><?php echo $row['Amount'] ?></td>
                        <td data-label="Datetime"><?php echo $row['Datetime'] ?></td>
                      </tr>
                    <?php } ?>

                    </tbody>
                  </table>
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
