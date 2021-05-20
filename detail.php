<!--DetailPAGE-->
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
        <div class="container-customer">
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

            <div class="detail">
                <h3>Selected Customer</h3>
                <?php
                include "config.php";
                $Id = $_REQUEST['Id'];

                $result = mysqli_query($con,"SELECT * FROM customer WHERE Id=$Id");
                $row = $result->fetch_assoc();

                ?>
                <p>CUSTOMER NAME : <?php  echo $row['Id'] ; ?></p>
                <p>EMAIL ID : <?php  echo $row['Email'] ; ?></p>
                <p>Balance : <?php  echo $row['Balance'] ; ?></p>
                <table>
                    <caption>Transaction History</caption>
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TO</th>
                        <th scope="col">AMOUNT</th>
                        <th scope="col">DATE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "config.php";
                      $result = mysqli_query($con,"SELECT* FROM moneytransfer a INNER JOIN customer b ON a.sender = b.Name WHERE b.Id=$Id");
                      while($rows = $result->fetch_assoc()){
                      ?>
                      <tr>
                        <td data-label="tid"><?php echo $rows['tid']; ?></td>
                        <td data-label="Reciever"><?php echo $rows['receiver']; ?></td>
                        <td data-label="Amount"><?php echo $rows['Amount'] ;?></td>
                        <td data-label="Datetime"><?php echo $rows['Datetime']; ?></td>
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
