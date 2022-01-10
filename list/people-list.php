
<link rel="stylesheet" href="./list.css">
<!-- read.php -->
<?php
include("../connect_db.php");
include("../authorized-begelijder-eigenaar.php");
$sql = "SELECT * FROM `student`";
$sqlid = "SELECT `studentnr` FROM `student`";
$studentid = mysqli_query($conn, $sqlid);
$result = mysqli_query($conn, $sql);
// error afhandeling
$recordid = "";
$records = "";
while ($record = mysqli_fetch_assoc($result)) {
  $records .= "<tr>
              <th scope='row'>" . $record["studentnr"] . "</th>
              <td> " . $record["voornaam"] . "</td>
              <td>" . $record["achternaam"] . "</td>
              <td>" . $record["email"] . "</td>
              <td>" . $record["cijfer"] . "</td>
              <td>
              <a href='./update.php?studentnr=" . $record['studentnr'] . "'>
              Give rating
             </a>
            </td>
              </tr>";
  //  while ($recordid = mysqli_fetch_assoc($studentid)){

  //  }

}
?>

<!-- crud opdracht -->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}
</style>
<body>
  
  <div class="container">
    <h1 class="text-center">Klas A Studenten</h1>
    <div class="row">
      <div class="col-12"></div>

    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">studentnr</th>
          <th scope="col">voornaam</th>
          <th scope="col">achternaam</th>
          <th scope="col">email</th>
          <th scope="col">cijfer</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
        <tr>
          <?php echo $records; ?>
        </tr>
      </thead>
      <table class="table">
        <h1 class="text-center">Klas A Leraren</h1>
        <thead>
          <tr>
            <th scope="col">Klas</th>
            <th scope="col">voornaam</th>
            <th scope="col">achternaam</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
          <tr>
            <td>A</td>
            <td>Jesse</td>
            <td>Klaver</td>
            <td></td>

          </tr>
        </thead>
        <tbody>

          <?php
          // echo $records;
          ?>

        </tbody>

      </table>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <a href="../index.php">Home</a>

</body>

</html>