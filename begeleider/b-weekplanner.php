<?php 
session_start();
include("../functions.php");/*is_authorized(['begeleider', 'eigenaar'])*/;
include("./side-navbar.php");
include("../connect_db.php");

$sql = "SELECT `Date` FROM `begeleidersrooster` WHERE `Begeleider` ='" . $_SESSION["name"] . "';";

$result = mysqli_query($conn,$sql);
$records = "";


$doTable=false;

if(mysqli_num_rows($result) > 0){
   // $doTable = true;
    while($record = mysqli_fetch_assoc($result)){
        $records .= "<tr><th scope='row'>" . explode(",",$record["Date"])[0] . "</th>
                    <td>" . explode(",",$record["Date"])[1] . "</td></tr>";
    }
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
    <link rel="stylesheet" href="./b-style.css">


</head>

<body>
    <div class="container" id="container-begeleider">
        <div class="jumbotron jumbotron-fluid" id="jumbotron-weekplanner">
            <div class="container">
                <h1 class="display-4">Weekplanner</h1>
            </div>
        </div>
        <div class="row">
            <div class="<?php echo ($doTable)? "col-6" : "col-12"; ?>" id="begeleider-form">
                <form action="./b-weekplanner_script.php" method="post">
                    <div class="form-group">
                        <label for="lespakket">Lespakket</label>
                        <select name="lespakket" class="form-control" id="lespakket-dropdown">
                            <option>Barman</option>
                            <option>Ober</option>
                            <option>Kok</option>
                            <option>Algemaan</option>
                        </select>
                    </div>
                    <div class="col"></div>
                    <div class="form-group">
                        <label for="date">date</label>
                        <input name="date" type="date" format="dd-mm-yyyy" class="form-control" id="date" placeholder="date">
                    </div>
                    <div class="form-group">
                        <label for="time">time</label>
                        <input name="time" type="time" class="form-control" id="time" placeholder="time">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <?php echo ($doTable)? '<div class="col-6" id="weekplanner-tabel">
            <h4>Already planned lessons</h4>
            <table>
                <thead>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </thead>
                <tbody>
                    <?php echo $records; ?>
                </tbody>
            </table>
            </div>': "" ?>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>