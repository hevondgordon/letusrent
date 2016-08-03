<?php
require 'connect.php';


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['email'];

$sql="INSERT INTO `googleuser` (`fname`,`lname`,`username`) VALUES ('$fname', '$lname', '$uname')";


setup();

if(insert($sql)){
    echo 1;
}
else{
    echo 0;
}

$conn->close();
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
?>