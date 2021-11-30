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


  
  $domicile = (isset($_POST["domicile"]))? sanitize($_POST["domicile"]): "";
  $is_student = (isset($_POST["domicile"]))? sanitize("student") : "";
  $zipcode = (isset($_POST["zipcode"]))? sanitize($_POST["zipcode"]) : "";
  $address = (isset($_POST["address"]))? sanitize($_POST["address"]) : "";
  $teacher = (isset($_POST["teacher"]))? sanitize($_POST["teacher"]) : "";
  $lessonseries = (isset($_POST["lessonseries"]))? sanitize($_POST["lessonseries"]) : "";

  
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

          if(!strcmp($record['rol'], 'klant')){
            $sql .= "INSERT INTO `klant` (`id`, 
                                              `voornaam`, 
                                              `tussenvoegsel`, 
                                              `achternaam`, 
                                              `email`, 
                                              `mobiel`, 
                                              `rol`, 
                                              `createdAt`, 
                                              `updatedAt`, 
                                              `emailVerified`) 
                                  VALUES              (NULL, 
                                              '$firstN', 
                                              '$infix', 
                                              '$lastN', 
                                              '$em', 
                                              '$phoneN', 
                                              'klant', 
                                              CURRENT_TIMESTAMP, 
                                              CURRENT_TIMESTAMP, 
                                              '1');"; 
          }elseif (!strcmp($record['rol'], 'student')) {
            $chop_email = explode("@", $em);
            $studentnr = $chop_email[0];

            $sql .= "INSERT INTO `student` (`studentnr`, 
                                            `voornaam`, 
                                            `tussenvoegsel`, 
                                            `achternaam`, 
                                            `mobiel`, 
                                            `email`, 
                                            `woonplaats`, 
                                            `straat`, 
                                            `postcode`, 
                                            `rol`, 
                                            `docent`, 
                                            `lespakket`) 
                                    VALUES ('$studentnr', 
                                            '$firstN', 
                                            '$infix', 
                                            '$lastN', 
                                            '$phoneN', 
                                            '$em', 
                                            '$domicile', 
                                            '$address', 
                                            '$zipcode', 
                                            'student', 
                                            '$teacher', 
                                            '$lessonseries');";

          } else {
            if (in_array($record['rol'], array('docent'))) {
            
              $chop_email = explode("@", $em);
              $abbreviation = strtoupper($chop_email[0]);
          
            } elseif (in_array($record['rol'], array('begeleider', 'eigenaar'))) {

              $abbreviation = strtoupper(substr($firstN, 0,1) . substr($firstN, -1, 1) . substr($lastN, 0, 1) . substr($lastN, -1, 1));
            
            }

            $sql .= "INSERT INTO `medewerker` (`email`, 
                                                `voornaam`, 
                                                `tussenvoegsel`, 
                                                `achternaam`, 
                                                `mobiel`, 
                                                `afkorting`) 
                                        VALUES ('$em', 
                                                '$firstN', 
                                                '$infix', 
                                                '$lastN', 
                                                '$phoneN', 
                                                '$abbreviation');";
        }
          
          
          
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