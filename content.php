<?php 
  
  
  if (isset($_GET["content"])) {
    if($_GET["content"] == "contact") {
      include("./contact/contact.php");
    } 
    else{
    include("./" . $_GET["content"] . ".php"); 
    }
  } 
       
  else {
    include("./home.php");
  }             
?>