<?php
require 'connect.php';


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['email'];

$sql="INSERT INTO `googleuser` (`fname`,`lname`,`username`) VALUES ('$fname', '$lname', '$uname')";



if ($conn->query($sql) === TRUE) {
    echo "1";
} else {
    echo "0";
}

$conn->close();
$_SESSION['fname']=$fname;
$_SESSION['lname']=$lname;
?>