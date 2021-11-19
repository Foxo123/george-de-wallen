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
                            <tr>
                                <th scope="col">Student Number</th>
                                <th scope="col">First</th>
                                <th scope="col">prefix</th>
                                <th scope="col">Last</th>
                                <th scope="col">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">423423</th>
                                <td>Mark</td>
                                <td></td>
                                <td>Otto</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <th scope="row">567567</th>
                                <td>Jacob</td>
                                <td></td>
                                <td>Thornton</td>
                                <td>5.5</td>
                            </tr>
                            <tr>
                                <th scope="row">3453454</th>
                                <td>Larry</td>
                                <td></td>
                                <td>the Bird</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>