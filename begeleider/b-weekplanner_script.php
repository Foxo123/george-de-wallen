<?php 
session_start();

include("../functions.php");
include("../connect_db.php");

var_dump($_POST);

if(!empty($_POST["lespakket"]) || !empty($_POST["date"]) || !empty($_POST["time"])){
    header("Location: ../index.php?content=message&alert=hacker-alert");
}


$lespakket = sanitize($_POST["lespakket"]);
$datum = sanitize($_POST["date"]);
$tijd = sanitize($_POST["time"]);


$sql = "INSERT INTO `begeleidersrooster` (`Begeleider`, `Lespakket`, `Date`) VALUES ('". $_SESSION['name']."','$lespakket', '". $datum . "," . $tijd . "');";

if(mysqli_query($conn,$sql)){
    header("Location: ../index.php?content=message&alert=rooster-update-succes");
}
else{
    header("Location: ../index.php?content=message&alert=rooster-update-failed");
}




?>