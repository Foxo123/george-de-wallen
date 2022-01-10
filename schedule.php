<?php
include("./connect_db.php");
include("./authorized-docent.php");
$sql = 'SELECT * FROM `begeleidersrooster`';

$result = mysqli_query($conn, $sql);

$records = "";
$table = "";

if (mysqli_num_rows($result) > 0) {
    while ($record = mysqli_fetch_assoc($result)) {
        $records .= "<tr>
            <th scope='row'>" . $record["Lespakket"] . "</th>
            <td> " . explode(",", $record["Date"])[0] . "</td>
            <td> " . explode(",", $record["Date"])[1] . "</td>
            <td> " . $record["Begeleider"] . " </td>
            </tr>  ";
    }
    $table = '<tr>
    <th scope="col">Course</th>
    <th scope="col">Date</th>
    <th scope="col">Time</th>
    <th scope="col">Mentor</th>
    </tr>';
} else {
    $records .= '<tr><div class="alert alert-primary" role="alert">
    There are no planned lessons yet.
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

    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <?php
                include("./side-navbar-docent.php");
                ?>
            </ul>
        </div>
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>
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