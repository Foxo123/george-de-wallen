<?php 
  
  
  if (isset($_GET["content"])) {
    if($_GET["content"] == "contactus") {
      include("./contact/contactus.html");
    } 
    else{
    include("./" . $_GET["content"] . ".php"); 
    }
  } 
       
  else {
    include("./home.php");
  }             
?>