<!--CUSTOMER PAGE-->
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
            <div class="customer">
                <table>
                    <caption>Customer Database</caption>
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">View</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "config.php";
                      $result = mysqli_query($con,"SELECT Id, Name FROM customer");
                      while($row = $result->fetch_assoc()){
                      ?>
                      <form  action="detail.php" method="post">
                        <tr >
                            <td data-label="tid"><?php echo $row['Id'] ?>
                                 <input type="hidden" id="Id" name="Id" value="<?=$row['Id']?>">

                            </td>
                            <td <td data-label="From"><?php echo $row['Name'] ?>
                                 <input type="hidden" id="Name" name="Name" value="<?=$row['Name']?>">
                            </td>

                            <td>  <button class="transfer-button" name="submit" type="submit">View</button></td>
                        </tr>
                      </form>
                      <?php } ?>
                    </tbody>
                  </table>
            </div>

  -->
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
