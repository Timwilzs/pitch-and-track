<?php

$surname = $_POST ['surname'];
$firstname = $_POST ['firstname'];
$lastname = $_POST ['lastname'];
$email = $_POST ['email'];
$number = $_POST ['number'];
$address = $_POST ['address'];
$bank_account = $_POST ['bank_account'];

$con = mysqli_connect ('localhost','root','','pitchntrack');

$query = "INSERT INTO `tbl_videosignupp`(`surname`, `firstname`, `lastname`, `email`, `number`, `address`, `bank_account`) VALUES ('$surname','$firstname','$lastname','$email','$number','$address','$bank_account')";

$run = mysqli_query ($con,$query);

if ($run == TRUE)
    echo "Application successfully";

else
    echo "Error!!!";    

?>