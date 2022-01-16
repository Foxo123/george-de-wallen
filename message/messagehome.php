<?php
include("./Message.php");

is_authorized(["student", "begeleider", "eigenaar", "docent"]);
$message = new Message();

include(determine_navbar($_SESSION['userrole']));
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Message</title>
    <link rel="stylesheet" href="message.css">
    
    <link rel="stylesheet" href="../css/side-navbar-docent.css">
</head>

<body>
    <div class="container" id="containers">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid" id="jumbotron-message">
                    <div class="container" id="containers">
                        <h1 class="display-4" id="display-4">Messages</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6" id="form">
                <form id="messageForm" method="post" action="./send-message.php">
                    <div class="form-group">
                        <label for="targetSelector">To:</label>
                        <select class="form-control" id="targetSelector" name="targetEmail">
                            <option selected>Select the person you want to message</option>
                            <?php
                            $message->printTargetNamesAndEmails($conn);
                            ?>
                        </select>
                    </div>
                    <div class="form-group" id="message-box">
                        <label for="exampleFormControlTextarea1">Message:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
            <div class="col-6" id="received-messages">
                <div class="jumbotron jumbotron-fluid container-fluid" id="jumbotron-received-messages">
                    <div class="container" id="containers">
                        <h1 class="display-4" id="display-4"><a href="./received-messages.php">Received messages</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>