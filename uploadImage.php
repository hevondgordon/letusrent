<?php
session_start();
require "connect.php";
setup();





/*SECTION THAT UPLOADS THE IMAGE SELECTED BY THE USER TO THE SERVER*/
if($_FILES["file"]["name"]!=null)
{
    $validextensions = array("jpeg", "jpg", "png");
    
    
    $temporary = explode(".", $_FILES["file"]["name"]);
    
    $file_extension = end($temporary);
    
    if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")) && in_array($file_extension, $validextensions)){
        
            if ($_FILES["file"]["error"] > 0)
            {
                    echo "File corrupted! select another image!";
            }
            else
            {
                    if (file_exists("upload/" . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
            }
            else
            {
                    $uniqid=uniqid("lweiy5i5",true);
                    $end=$temporary[sizeof($temporary)-1];
                    $newName=$uniqid.".".$end;
                    $sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
                    $targetPath = "uploaded_images/".$_FILES["file"]["name"]; // Target path where file is to be stored
                    move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
                    rename( "uploaded_images/".$_FILES["file"]["name"],"uploaded_images/$newName");
                    
                    
                    
                    
                    /*SENDING DATA TO THE DATABASE FOR STORAGE...MIGHT NEED A FASTER WAY TO DO THIS IN THE FUTURE*/
                    
                    
                    
                    echo "";
                    
                    
                    
            }
            }
    }
    
    else
    {
          echo "File type not supported! please select a jpg,png or a jpeg file!";
    }
}
else{
    echo "No image selected!";
}
?>