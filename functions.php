<?php
  function sanitize($raw_data) {
    global $conn;
    $data = htmlspecialchars($raw_data);
    $data = mysqli_real_escape_string($conn, $data);
    $data = trim($data);
    return $data;
  }

  function mk_password_hash_from_microtime() {
    $mut = microtime();

    $time = explode(" ", $mut);

    $password = $time[1] * $time[0] * 1000000;

    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $onehour = mktime(1,0 ,0, 1, 1, 1970);

    $date_formated = date("d-m-Y", ($time[1] + $onehour));

    $time_formated = date("H:i:s", ($time[1] + $onehour));

    return array("password_hash" => $password_hash,
                 "date"          => $date_formated,
                 "time"          => $time_formated);
  }

  function determine_userrole($email){

    //E-mail word opgesplits in een array. Voor en na het @-teken
    $chop_email = explode("@", strtolower($email));

    
    if(!strcmp("mboutrecht.nl", $chop_email[1])) {
      $userrole = "docent";
    } else if(!strcmp("student.mboutrecht.nl", $chop_email[1])){
      $userrole = "student";
    } else if(!strcmp("georgemarina@georgemarina.nl", $email)) {
      $userrole = "eigenaar";
    } else if(!strcmp("georgemarina.nl", $chop_email[1])) {
      $userrole = "begeleider";
    } else{
      $userrole = "klant";
    }
    return $userrole;
  }

  //kijk of de gebruiker op de pagina mag zijn
  function check_userrole($email, $userroles){
    global $conn;

    $sql = "SELECT * FROM `password` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)){
      $db_userrole = mysqli_fetch_assoc($result);
      if(in_array($db_userrole["rol"], $userroles)) {
        return true;
      }else {
        return false;
      }
    } else{
      return false;
    }

  }


  function is_authorized($userroles) {
    if (!isset($_SESSION["em"])) {
      return header("Location: ../index.php?content=message&alert=auth-error");
    } elseif ( !in_array($_SESSION["userrole"], $userroles)) {
      return header("Location: ../index.php?content=message&alert=auth-error-user");
    } else {
      return true;
    }
  }

  function determine_navbar($userrole){
    switch($_SESSION["userrole"]){
      case "begeleider":
          return "../begeleider/side-navbar.php";
          break;
      case "eigenaar":
          return "../eigenaar/navbareigenaar.php";
          break;
      case "docent":
          return "../side-navbar-docent.php";
          break;
      case "student":
          return "../side-navbar-student.php";
          break;   
      }
  }
?>