<?php


include "config.php";
$tid = $_REQUEST['tid'];
$To =  $_REQUEST['receiver'];
$From = $_REQUEST['sender'];
$Amount =  $_REQUEST['Amount'];
$unixTime = time();
$Datetime = date("r", $unixTime);

if (($Amount)<0)
{
    echo '<script type="text/javascript">';
    echo ' alert("Negative values cannot be transferred")';  // showing an alert box.
    echo '</script>';
}



    // constraint to check zero values
else if($Amount == 0){

     echo "<script type='text/javascript'>";
     echo "alert('Zero value cannot be transferred')";
     echo "</script>";
}

else{

    $sql = "INSERT INTO moneytransfer VALUES ('$tid', '$To','$From','$Amount', '$Datetime')";
    // add $$ to target account
    $result = mysqli_query($con, "UPDATE customer SET Balance = Balance + " . $Amount . " WHERE Name ='".$To."'");
    if ($result !== TRUE) {
        mysqli_rollback($con);  // if error, roll back transaction
    }
    $result = mysqli_query($con, "UPDATE customer SET Balance = Balance - " . $Amount . " WHERE Name ='".$From."'");
      if ($result !== TRUE) {
          mysqli_rollback($con);  // if error, roll back transaction
      }

      // assuming no errors, commit transaction
      mysqli_commit($con);



      if(mysqli_query($con, $sql)){
          echo '<script>alert("Transaction successful")</script>';
      }
      else{
          echo '<script>alert("Transaction failed! ⚠")</script>';
      }
   }

// Close connection
mysqli_close($con);
?>
