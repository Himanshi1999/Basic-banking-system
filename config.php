<?php

//Development connection
//$server="localhost";
//$username="root";
//$password="";
//$db="basic bank system Database";

//Remote database connection
$server="localhost";
$username="root";
$password="";
$db="banking";

$con=mysqli_connect($server,$username,$password,$db);

if($con){

}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
