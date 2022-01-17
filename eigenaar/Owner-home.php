<?php include("./navbareigenaar.php");
include("../connect_db.php");


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

<body2>


    <style>
        /*
 CSS for the main interaction
*/
        .tabset>input[type="radio"] {
            position: absolute;
            left: -200vw;
        }

        .tabset .tab-panel {
            display: none;
        }

        .tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
        .tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
        .tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
        .tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
        .tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
        .tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6) {
            display: block;
        }

        /*
 Styling
*/
        #body2 {
            font: 16px/1.5em "Overpass", "Open Sans", Helvetica, sans-serif;
            color: #333;
            font-weight: 300;
        }

        .tabset>label {
            position: relative;
            display: inline-block;
            padding: 15px 15px 25px;
            border: 1px solid transparent;
            border-bottom: 0;
            cursor: pointer;
            font-weight: 600;
        }

        .tabset>label::after {
            content: "";
            position: absolute;
            left: 15px;
            bottom: 10px;
            width: 22px;
            height: 4px;
            background: #8d8d8d;
        }

        .tabset>label:hover,
        .tabset>input:focus+label {
            color: #06c;
        }

        .tabset>label:hover::after,
        .tabset>input:focus+label::after,
        .tabset>input:checked+label::after {
            background: #06c;
        }

        .tabset>input:checked+label {
            border-color: #ccc;
            border-bottom: 1px solid #fff;
            margin-bottom: -1px;
        }

        .tab-panel {
            padding: 30px 0;
            border-top: 1px solid #ccc;
        }
    </style>
</body2>

<body>


    <center>
        <div class="title" style="font-family: arial; font-size:50px; padding-top:50px;">Welcome owner</div>
    </center>
    <div class="container" style="padding-left: 300px; padding-top: 50px;">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
    <center>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="../img/log1.jpg" class="card-img-top" alt="...">
                <div class="card-body">

                </div>
            </div>
    </center>
    </div>
    </div>

    <div class="tabset" style="padding-left: 250px; padding-top:50px;">
        <!-- Tab 1 -->
        <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
        <label for="tab1">Tables</label>
        <!-- Tab 2 -->
        <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
        <label for="tab2">Logs</label>
        <!-- Tab 3 -->
        <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
        <label for="tab3">News</label>
        <!-- dit zijn de tabs en de indelingen -->
        <div class="tab-panels">
            <section id="marzen" class="tab-panel">
                <h2>Lesson schedule:</h2>
                <p><strong></strong></p>
                <p><strong></strong>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="padding-top:50px">id</th>
                            <th scope="col">Helper</th>
                            <th scope="col">Lesson</th>
                            <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        echo $records;
                        ?>
                    </tbody>
                </table>
                </p>
            </section>
            <section id="rauchbier" class="tab-panel">
                <h2>User logs</h2>
                <p><strong></strong></p>
                <p><strong></strong>
                <h5 class="card-title"></h5>
                <p class="card-text">See the user logs!</p>
                <a href="#" class="btn btn-primary">Lets see</a></p>
            </section>
            <section id="dunkles" class="tab-panel">
                <h2 style="font-size:40px;">Daily George!</h2>
                <p><strong style="font-size: 25px;">Our news</strong></p>
                <p><strong>14-12-2021</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, obcaecati praesentium cumque dolor omnis voluptas voluptatum fugit iure quibusdam voluptates ullam quisquam, voluptatibus exercitationem dignissimos aliquid asperiores hic vero quaerat.</p>
                <p><strong>Overall Impression:</strong>Personnel only!</p>
                <p><strong>7-12-2021</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, obcaecati praesentium cumque dolor omnis voluptas voluptatum fugit iure quibusdam voluptates ullam quisquam, voluptatibus exercitationem dignissimos aliquid asperiores hic vero quaerat.</p>
                <p><strong>Overall Impression:</strong>News</p>
                <p><strong>1-12-2021</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, obcaecati praesentium cumque dolor omnis voluptas voluptatum fugit iure quibusdam voluptates ullam quisquam, voluptatibus exercitationem dignissimos aliquid asperiores hic vero quaerat.</p>
                <p><strong>Overall Impression:</strong>Need help!</p>
                <p><strong>25-11-2021</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, obcaecati praesentium cumque dolor omnis voluptas voluptatum fugit iure quibusdam voluptates ullam quisquam, voluptatibus exercitationem dignissimos aliquid asperiores hic vero quaerat.</p>
            </section>
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