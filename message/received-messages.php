<?php

include("./Message.php");
include(determine_navbar($_SESSION['userrole']));

$message = new Message();

$result = $message->getMessages($conn);


$messages = "";
$records = "";
while ($record = mysqli_fetch_assoc($result)) {
  $records .= '
             <div class="container">
              <div class="card" id="message-card">
                <div class="card-body">
                <h5 class="card-title">From: '. $record["senderEmail"] . '</h5>
                <p class="card-text">Message: ' . $record["Message"] . '</p>
                <a href="./delete-message.php?id='. $record["id"] .'" class="card-link" style="text-align: right;">Delete message</a>
                </div>
              </div>
            </div>';

}
if(empty($records)){
  $records .= '<tr><div class="alert alert-primary" role="alert">
  There are no received messages.
</div></tr>';
}


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/side-navbar-docent.css">
  <link rel="stylesheet" href="./message.css">
  <title>Received messages</title>
</head>

<body>
  <div class="container" id="containers">
    <div class="row">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid" id="jumbotron-received">
          <div class="container" id="containers">
            <h1 class="display-4" id="display-4">Received messages</h1>
          </div>
        </div>
      <?php 
        echo $records;
      ?>
      </div>
    </div>
  </div>


  


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
