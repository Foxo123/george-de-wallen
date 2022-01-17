<?php
include("./connect_db.php");

$sql = 'SELECT * FROM `cijfers`';

$result = mysqli_query($conn, $sql);

$records = "";
$table = "";

if (mysqli_num_rows($result) > 0) {
    while ($record = mysqli_fetch_assoc($result)) {
        $records .= "<tr>
            <th scope='row'>" . $record["studentnummer"] . "</th>
            <td> " . $record["studentnaam"] . " </td>
            <td> " . $record["cijfer"] . " </td>
            <td> " . $record["beschrijving"] . " </td>
            </tr>  ";
    }
    $table = '<tr>
    <th scope="col">Student Number</th>
    <th scope="col">Name</th>
    <th scope="col">Grade</th>
    <th scope="col">Description</th>
    </tr>';
} else {
    $records .= '<tr><div class="alert alert-primary" role="alert">
    There are no results yet.
  </div></tr>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>home</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
<!-- button -->
<div class = "row">
<div class = "col-12">
 <a href="./addresult.php" type= "button" class="btn btn-danger btn-lg btn-block"> Nieuwe record toevoegen</a>
</div>
</div>
<!-- side navbar -->
    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <?php
                include("./side-navbar-docent.php");
                ?>
            </ul>
        </div>
        <div class="main_content">
            <div class="info">
                <div class="wrapper">
                    <table class="table">
                        <thead>
                            <?php
                                echo $table
                            ?> 
                        </thead>
                        <tbody>
                            <?php
                                echo $records
                            ?>       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>