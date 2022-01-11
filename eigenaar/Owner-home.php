<?php include("./navbareigenaar.php"); include("../connect_db.php");
include("authorized-begeleider-eigenaar.php");

$sql = "SELECT * FROM `begeleidersrooster`";
    

// deze stuurt de verbinding via de $sql naar de verbinding $conn
$result = mysqli_query($conn, $sql);


$records = "";
while ($record = mysqli_fetch_assoc($result)) {
    $records .= "<tr> 
    <th scope ='row'>" . $record["id"] . "</th> 
      <td> " . $record["Begeleider"] . "</td>
      <td> " . $record["Lespakket"] . "</td>
      <td> " . $record["Date"] . "</td>
  </tr>";
};
    ?>





<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/addcareerpage.css">  
</head>

<body>

    <center>
        <div class="title" style="font-family: arial; font-size:50px; padding-top:50px;">Welcome owner</div>
    </center>
    <div class="container" style="padding-left: 350px; padding-top: 50px;">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/Newspaper1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">News</h5>
                        <p class="card-text">Find out who the worker of the month is, new menu and more!</p>
                        <a href="#" class="btn btn-primary">Lets see!</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/log1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Logs</h5>
                        <p class="card-text">See the user logs!</p>
                        <a href="#" class="btn btn-primary">Lets see</a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Begeleider</th>
                    <th scope="col">Lespakket</th>
                    <th scope="col">date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo $records;
                ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>

    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</link>
</html>
