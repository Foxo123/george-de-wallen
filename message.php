<?php
  $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
  $id = (isset($_GET["id"]))? $_GET["id"]: "";
  $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
  $email = (isset($_GET["email"]))? $_GET["email"]: "";
  
  switch($alert) {
    case "no-email" :
      echo '<div class="alert alert-info mt-5 w-50 mx-auto text-center" role="alert">
              Please fill in all fields
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    case "emailexists" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              This email already exist please try again.
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    case "register-error" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Something went wrong while registering, please try again.
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    case "register-success" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              You have been succesfully registerd, you will get an email to activate your account
            </div>';
      header("Refresh: 3; ./index.php?content=login");
    break;
    case "hacker-alert" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">U have no rights on this page</div>';
      header("Refresh: 3; ./index.php?content=home");
    break;
    case "password-empty" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              Please fill in all fields of the form
            </div>';
      header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case "nomatch-password" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              The passwords didnt match...
            </div>';
      header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case "no-id-pwh-match" :
      echo '<div class="alert alert-warning mt-5 w-50 mx-auto text-center" role="alert">
              You have not been found in the database, please try again
            </div>';
      header("Refresh: 3; ./index.php?content=register");
    break;
    case "update-success" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              U have succesfully registerd your account
            </div>';
      header("Refresh: 3; ./index.php?content=login");
    break;
    case "update-error" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Failed registering please try again
            </div>';
            header("Refresh: 3; ./index.php?content=activate&id=$id&pwh=$pwh");
    break;
    case "already-active" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              You have already activated you account
            </div>';
            header("Refresh: 3; ./index.php?content=login");
    break;
    case "no-match-pwh" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
             Something went wrong when activating please try registering again
            </div>';
            header("Refresh: 3; ./index.php?content=register");
    break;
    case "loginform-empty" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Please fill in all fields of the form
            </div>';
            header("Refresh: 3; ./index.php?content=login");
    break;
    case "email-unknown" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              The email filled in isnt registerd
            </div>';
            header("Refresh: 3; ./index.php?content=login");
    break;
    case "not-activated" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Please activate your account go to your email: <span class="badge badge-danger p-2">' . $email . '</span> 
            </div>';
            header("Refresh: 3; ./index.php?content=login");
    break;
    case "no-pw-match" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Invalid credantials for <span class="badge badge-danger p-2">' . $email . '</span> , try again
            </div>';
            header("Refresh: 3; ./index.php?content=login");
    break;
    case "logout" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
             You have been succesfully logged out
            </div>';
            header("Refresh: 3; ./index.php?content=home");
    break;
    case "auth-error" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              Please login first, back to homepage....
            </div>';
            header("Refresh: 3; ./index.php?content=home");
    break;
    case "auth-error-user" :
      echo '<div class="alert alert-secondary mt-5 w-50 mx-auto text-center" role="alert">
              U have no rights on this page, back to home...
            </div>';
            header("Refresh: 3; ./index.php?content=home");
    break;
    case "phoneNumberPutIn" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              your number has been send
            </div>';
            header("Refresh: 3; ./index.php?content=home");
    break;
    case "Message-send" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              Message send succesfully
            </div>';
            header("Refresh: 3; ./index.php?content=home");
    break;
    case "message-send-failed" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              We werent able to send your message, please try again
            </div>';
            header("Refresh: 3; ./index.php?content=bookingform");
    break;
    case "reservation-empty" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Please fill in all of the information
            </div>';
            header("Refresh: 3; ./index.php?content=reservation");
    break;
    case "reservation-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              Reservation succes
            </div>';
            header("Refresh: 3; ./index.php?content=reservation");
    break;
    case "reservation-failed" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Reservation procces failed please try again
            </div>';
            header("Refresh: 3; ./index.php?content=reservation");
    break;
    case "rating-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              Succesfully altered the rating.
            </div>';
            header("Refresh: 3; ./list/people-list.php");
    break;
    case "rating-failed" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
             Failed to alter the rating.
            </div>';
            header("Refresh: 3; ./list/people-list.php");
    break;
    case "wrongactivationpage" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              You are on the wrong activation page, please try again
            </div>';
            header("Refresh: 3; ./index.php?content=login");
    break;
    case "rooster-update-succes" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              Succesfully put into the schedule!
            </div>';
            header("Refresh: 3; ./begeleider/b-weekplanner.php");
    break;
    case "rooster-update-failed" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              failed to  put into the schedule!
            </div>';
            header("Refresh: 3; ./begeleider/b-weekplanner.php");
    break;
    case "not-filled-in" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              please fill in the email and message
            </div>';
            header("Refresh: 3; ./message/messagehome.php");
    break;
    case "message-send" :
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              message send succefully
            </div>';
            header("Refresh: 3; ./message/messagehome.php");
    break;
    case "message-failed" :
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Message failed to send please try again
            </div>';
            header("Refresh: 3; ./message/messagehome.php");
    break;
    case "message-deleted":
      echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
              Message deleted succesfully
            </div>';
            header("Refresh: 3; ./message/received-messages");
    break;
    case "message-deleted-failed":
      echo '<div class="alert alert-danger mt-5 w-50 mx-auto text-center" role="alert">
              Message could not be deleted please try again..
            </div>';
            header("Refresh: 3; ./message/received-messages.php");
    break;

    default:
      header("Location: ./index.php?content=home");
    break;
  }


?>