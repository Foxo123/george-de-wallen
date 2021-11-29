<?php


$firstname = $_POST["cijfer"];

$id = $_POST["id"];

$sql = "UPDATE `student` SET `cijfer` = '$firstname' WHERE `id` = $id;";


mysqli_query($conn, $sql);

header("Location: ./people-list.php")
?>