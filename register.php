<?php
require 'connect.php';
setup();

$fname=mysqli_real_escape_string($conn, $_POST['fname']);
$lname=mysqli_real_escape_string($conn, $_POST['lname']);
$username=mysqli_real_escape_string($conn, $_POST['username']);
$password=password_hash(mysqli_real_escape_string($conn, $_POST['password']), PASSWORD_BCRYPT);


$sql="INSERT INTO `landlord`(`lname`, `fname`, `username`, `password`) VALUES ('$lname','$fname','$username','$password')";


if(insert($sql)){
    echo 1;
   
}
else{
    echo 0;
}


?>