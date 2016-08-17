<?php
session_start();
$conn;


function setup($servername = "127.0.0.1",$username = "jermyhewitt",$password = "",$db="renters",$dbport = 3306){

global $conn;

$conn= new mysqli($servername, $username, $password,$db,$dbport);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
return $conn;

}

function insert($sql){
    global $conn;
    
   if($conn->query($sql)){
       return true;
   }
   
   else{
       return false;
   }
}

function loginQuery($sql,$password){
    global $conn;
    /*FETCH DATA BASED ON THE USERNAME PROVIDED IN THE SQL QUERY*/
    
    $result=$conn->query($sql);
    $data=$result->fetch_assoc();
    if ($result->num_rows==1) {
        
        /*VERIFY THAT PASSWORDS MATCH...USED password_verify TO CHECK THE PLAIN PASSWORD AGAINST THE HASHED PASSWORD RETRIEVED FROM THE DATABASE*/
        
        if(password_verify($password,$data['password'])){
            $_SESSION['fname']=$data['fname'];
            return true;    
        }
        
    } 
    
    return false;
    
}

function googleUserLogin($sql,$username){
     global $conn;
    /*FETCH DATA BASED ON THE USERNAME PROVIDED IN THE SQL QUERY*/
    
    $result=$conn->query($sql);
    $data=$result->fetch_assoc();
    if ($result->num_rows==1) {
        
        /*VERIFY THAT PASSWORDS MATCH...USED password_verify TO CHECK THE PLAIN PASSWORD AGAINST THE HASHED PASSWORD RETRIEVED FROM THE DATABASE*/
        
        if($username==$data['username']){
            $_SESSION['fname']=$data['fname'];
            return true;    
        }
        
    } 
    
    return false;
}
?>