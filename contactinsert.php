<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];

$con = mysqli_connect ('localhost','root','','pitchntrack');

$query = "INSERT INTO `tbl_contactinsert`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

$run = mysqli_query ($con,$query);

if ($run == TRUE)
    echo "Message sent successfully";

else
    echo "Error!!!"    


?>