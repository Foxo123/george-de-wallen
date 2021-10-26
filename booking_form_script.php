<?php 
include("./functions.php");
include("./connect_db.php");

$firstN = sanitize($_POST["FirstName"]);
$infix = sanitize($_POST["Infix"]); 
$lastN = sanitize($_POST["LastName"]);
$phoneN = intval(sanitize($_POST["PhoneNumber"]));
$message = sanitize($_POST["Message"]);

if(empty($_POST["FirstName"]) && empty($_POST["LastName"]) && empty($_POST["Infix"]))
{
    $sql = "INSERT INTO `contact_them`(`phoneN`) VALUES ($phoneN)";

    if(mysqli_query($conn,$sql)){
        header("Location: ./index.php?content=message&alert=phoneNumberPutIn");
    }
}
else{
    
    $sql = "INSERT INTO `contact_info`(`phoneN`, `firstname`, `infix`, `lastname`, `message`) VALUES ($phoneN,'$firstN','$infix','$lastN','$message')";

    if(mysqli_query($conn,$sql)){
        header("Location: ./index.php?content=message&alert=Message-send");
    }
    else{
        header("Location: ./index.php?content=message&alert=message-send-failed");
    }
}
?>
