<?php


include("./Message.php");

is_authorized(["student", "begeleider", "eigenaar", "docent"]);

$message = new Message();


if(!isset($_POST["targetEmail"]) || !isset($_POST["message"])){
    header("Location: ../index.php?content=message&alert=not-filled-in");
}

$message->setTargetEmail($_POST["targetEmail"]);
$message->setMessage($_POST["message"]);

if($message->sendMessage($conn)){
    header("Location: ../index.php?content=message&alert=message-send");
}else{
    header("Location: ../index.php?content=message&alert=message-failed");
}
?>

