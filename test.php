<?php
$servername = "127.0.0.1";
$us$servername = "127.0.0.1";
$username = "jermyhewitt";
$password = "";
$db="renters";
$dbport = 3306;
// Create connection
$conn = new mysqli($servername, $username, $password,$db,$dbport);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


function insert($sql){
  
  if($conn->query(sql)){
    return 1;
  }
  else{
    return 0;
  }
}
?>