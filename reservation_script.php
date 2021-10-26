<?php 
include("./functions.php");
include("./connect_db.php");


$name = sanitize($_POST["reservation-name"]);
$date = sanitize($_POST["date"]);
$table = sanitize($_POST["table-select"]);
$time = sanitize($_POST["time-select"]);

//first check if post array is filled in
if(empty($name) || empty($date) || empty($table) || empty($time)){
    header("Location: ./index.php?content=message&alert=reservation-empty");
}
else {

    $sql = "INSERT INTO `reserveren`(`name`, `date`, `time`, `table_name`) VALUES ('$name','$date','$time','$table')";

 
    if(mysqli_query($conn,$sql)){
        header("Location: ./index.php?content=message&alert=reservation-succes");
    }
    else{
        header("Location: ./index.php?content=message&alert=reservation-failed");
    }
}





?>
