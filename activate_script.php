<?php
  include("./connect_db.php");
  include("./functions.php");

  $em = sanitize($_POST["em"]);
  $pwh = sanitize($_POST["pwh"]);
  $password = sanitize($_POST["password"]);
  $passwordCheck = sanitize($_POST["passwordCheck"]);
  $firstN = sanitize($_POST["firstName"]);
  $infix = sanitize($_POST["infix"]); 
  $lastN = sanitize($_POST["lastName"]);
  $phoneN = sanitize($_POST["phoneNumber"]);

  
  if (empty($_POST["password"]) || empty($_POST["passwordCheck"]) || empty($_POST["firstName"])) {
    header("Location: ./index.php?content=message&alert=password-empty&em=$em&pwh=$pwh");
  } elseif (strcmp($password, $passwordCheck)) {
    header("Location: ./index.php?content=message&alert=nomatch-password&em=$em&pwh=$pwh");
  } else {
    
    $sql = "SELECT * FROM `password` WHERE `email` = '$em'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {

      $record = mysqli_fetch_assoc($result);

      if ($record["activated"]) {
        header("Location: ./index.php?content=message&alert=already-active");
      } else {

        if ( !strcmp($record["passwd"], $pwh)) {
          // 1. Maak een passwordhash voor het nieuw gekozen wachtwoord
          $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
          // 2. Ga het record updaten met het nieuw gekozen gehashte wachtwoord
          $sql = "UPDATE `password` 
                  SET    `passwd` = '$password_hash',
                         `updatedAt`= CURRENT_TIMESTAMP,
                         `activated` = 1
                  WHERE  `email` = '$em'
                  AND    `passwd` = '$pwh';";
          
          $sql .= "INSERT INTO `klant` (`id`,`voornaam`, `tussenvoegsel`, `achternaam`, `email`, `mobiel`,`rol`, `createdAt`, `updatedAt`, `emailVerified`) 
          VALUES (NULL, '$firstN', '$infix', '$lastN', '$em', '$phoneN','klant', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '1');";
        // echo $sql;exit();
          if (mysqli_multi_query($conn, $sql)) {
            // succes
            header("Location: ./index.php?content=message&alert=update-success");
          } else {
            // error
            header("Location: ./index.php?content=message&alert=update-error&em=$em&pwh=$pwh");        
          }
        } else {
          header("Location: ./index.php?content=message&alert=no-match-pwh");        
        }

      }
      
      
      // 3. Geef de gebruiker feedback met een alert dat het updaten is gelukt of niet en stuur dan door naar een andere pagina.
    } else {
      // foutmelding
      header("Location: ./index.php?content=message&alert=no-id-pwh-match");
    }
  }
?>