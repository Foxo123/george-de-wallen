<?php
##connecting met database
include("./connect_db.php");
$sql = 'SELECT * FROM `begeleidersrooster` LIMIT 3;';

##dit is de functie die de query naar de database stuurt
$result = mysqli_query($conn, $sql);
$records = "";
$table = "";
#records
if(mysqli_num_rows($result) > 0){
    while ($record = mysqli_fetch_assoc($result)) {
        $records .= "<tr>
            <th scope='row'>" . $record["Lespakket"] . "</th>
            <td> " . explode(",", $record["Date"])[0] . "</td>
            <td> " . explode(",", $record["Date"])[1] . "</td>
            <td> " . $record["Begeleider"] . "</td>
            </tr>  ";
    }
    $table = '<th scope="col">lesson</th>
    <th scope="col">Date</th>
    <th scope="col">Time</th>';
}else{
    $records .= '<tr><div class="alert alert-primary" role="alert">
    There are no planned lessons yet please <a href="./" class="alert-link">plan a lesson</a>.
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
    <link rel="stylesheet" href="./navbar.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    
  </head>
  <body>
  <!-- side bar -->
  <div class="wrapper">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="./student.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="./studentcalender.php"><i class="fas fa-list"></i>Calender</a></li>
                <li><a href="./result.php"><i class="fas fa-chart-bar"></i>Results</a></li>
                <li><a href="./docent-message.php"><i class="fas fa-envelope"></i>Mail</a></li>
            </ul>
        </div>
    </div>
        <!-- colum 1 met daarin een carousel -->
  <div class="container" style= "margin: auto; margin-top: 30;">
  <div class="row" style="padding-bottom: 50px; padding-top: 50px;">
    <div class="col"  style=" border-right-style: solid;">
        <center><h1>Goededag student,</h1>
        <h2>Het is vandaag 1/11/2021 </h2></center>
        <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" class="">Lespakket</th>
        <th scope="col" class="-">Date</th>
        <th scope="col" class="" >Date</th>
        <th scope="col" class="">Begeleider</th>
      </tr>
    </thead>
    <tbody class="", style="font-size:1.3vw"  >
    <?php
    echo $records;
    ?>
    </tbody>
  </table>
    </div>
        <!-- column 2  met daarin foto-->
    <div class="col"> <img src="./img/group (2).png" class="img-fluid" width="1000" height="1000" ></div>
        <!-- column 3 met daarin carousel -->
        <div class="container">
  <div class="row">
    <div class="col" style="padding-bottom:  10px; padding-top: 30px;">
    <table class="table table-hover">
    <thead>
      <tr >
       <th scope="col" class=""><center>News</center></th>
      </tr>
    </thead>
    <tbody class="", style="font-size:1.3vw">
    </tbody>
  </table> <div class="alert alert-primary" role="alert">
  <center>News has not arrived.</center>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>