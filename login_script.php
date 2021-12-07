<?php
include("./connect_db.php");
include("./functions.php");

session_destroy();

$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);

if (empty($email) || empty($password)) {
  // Check of de loginformvelden zijn ingevuld...
  header("Location: ./index.php?content=message&alert=loginform-empty");
} else {

  $sql = "SELECT * FROM `password` WHERE `email` = '$email'";

  $result = mysqli_query($conn, $sql);

  // var_dump((bool) mysqli_num_rows($result));

  if (!mysqli_num_rows($result)) {
    // E-mailadres onbekend...
    header("Location: ./index.php?content=message&alert=email-unknown");
  } else {

    $record = mysqli_fetch_assoc($result);

    // var_dump((bool) $record["activated"]);

    if (!$record["activated"]) {
      // Not activated
      header("Location: ./index.php?content=message&alert=not-activated&email=$email");
    } elseif (!password_verify($password, $record["passwd"])) {
      // No password match
      header("Location: ./index.php?content=message&alert=no-pw-match&email=$email");
    } else {
      // password matched
      
      session_start();

      $_SESSION["em"] = $record["email"];
      $_SESSION["passwd"] = $record["passwd"];
      $_SESSION["userrole"] = $record["rol"];

      switch ($record["rol"]) {
        case 'docent':
          header("Location: ./docent-home.php");
          break;
        case 'eigenaar':
          header("Location: ./eigenaar/Owner-home.php");
          break;
        case 'student':
          header("Location: ./student.php");
          break;
        case 'begeleider':
          header("Location: ./begeleider/b-home.php?name=". explode("@", $email)[0]);
          break;
        case 'klant':
          header("Location: ./index.php?content=k-home");
          break;
        case 'root':
          header("Location: ./index.php?content=r-home");
          break;
        default:
          header("Location: ./index.php?content=home");
          break;
      }
    }
  } // E-mailadres onbekend...
} // Check of de loginformvelden zijn ingevuld...
