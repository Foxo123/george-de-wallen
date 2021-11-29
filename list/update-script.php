<?php

var_dump($_POST);

include("../functions.php");
include("../connect_db.php");


$studentnr = ($_POST["studentnr"]);
$cijfer = sanitize($_POST["cijfer"]);

$sql = "UPDATE `student` SET `cijfer` = '$cijfer' WHERE `studentnr` = $studentnr;";


if(mysqli_query($conn, $sql)){
        header("Location: ../index.php?content=message&alert=rating-succes");
        header("Location: ./people-list.php");
}
else{
        header("Location: ../index.php?content=message&alert=rating-failed");
}

?>