<?php 

include("./Message.php"); 

is_authorized(["student", "begeleider", "eigenaar", "docent"]);

$message = new Message();

$id = sanitize($_GET["id"]);


$message->deleteMessage($conn,$id);

?>