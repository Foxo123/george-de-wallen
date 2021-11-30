<?php
include("./connect_db.php");
$sql = 'SELECT * FROM `begeleidersrooster`;';
##dit is de functie die de query naar de database stuurt
$result = mysqli_query($conn, $sql);
$records = "";
$table = "";
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./navbar.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  </head>
  <body>
    <!-- sidebar  --> 
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
    <!-- carousel met button-->
    <div class="container">
  <div class="row">
    <div class="col">
    <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col" class="-">Lespakket</th>
        <th scope="col" class="" >date</th>
        <th scope="col" class="" >date</th>
        <th scope="col" class="">begeleider</th>
      </tr>
    </thead>
    <tbody class="", style="font-size:1.3vw"  >
    <?php
    echo $records;
    ?>
    </tbody>
  </table>
</div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>