<?php
session_start();
require 'connect.php';
setup();


$username=mysqli_real_escape_string($conn, $_POST['username']);

/*IF I HAD HASHED THE PASSWORD HERE AND CHECKED IT AGAINST THE HASHED PASSWORD IN THE DB

IT WOULD NOT HAVE WORKED BECAUSE A NEW HASH IS GENERATED EACH TIME THE HASH FUNCTION

IS CALLED EVEN IF THE PLAINTEXT IS THE SAME*/

$sql="SELECT * FROM `landlord` WHERE username='$username'";

if(loginQuery($sql,$password=mysqli_real_escape_string($conn,$_POST['password']))){
    echo 1;
   $result=$conn->query($sql);
   $data=$result->fetch_assoc();
}
else{
    echo 0;
}
?>