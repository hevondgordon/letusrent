<?php
session_start();
require 'connect.php';



$uname=$_POST['email'];
$username=$_POST['username'];
$sql="INSERT INTO `googleuser` (`fname`,`lname`,`username`) VALUES ('$fname', '$lname', '$uname')";

$googleUserSQL="SELECT * FROM `googleuser` WHERE username='$username'";
/*Login a registered user that signed up using theri gmail account*/
setup();

if($_POST['action']=="login"){
    
    if(googleUserLogin($googleUserSQL,$username)){
      
        $_SESSION['fname']=$_POST['fname'];
      
        echo 1;
    }
   
}



if($_POST['action']=='register'){
    global $sql;
   if(insert($sql)){
        echo 1;
        
       $result=$conn->query($googleUserSQL);
       $data=$result->fetch_assoc();
       
        if ($result->num_rows==1) {
            $_SESSION['fname']=$data['fname'];
        } 
      }
      else {
          echo 0;
      }
   
}



$conn->close();

?>