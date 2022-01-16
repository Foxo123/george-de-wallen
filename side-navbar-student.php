<?php $link = determine_link_prefix("./index.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SideBar</title>
    <link rel="stylesheet" href="./navbar.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

<div class="wrapper">
        <div class="sidebar">
            <h2>Control Panel</h2>
            <ul>
                <li><a href="<?php echo $link ?>student.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="./studentcalender.php"><i class="fas fa-list"></i>Schedule</a></li>
                <li><a href="./resultstudent.php"><i class="fas fa-chart-bar"></i>Results</a></li>
                <li><a href="./message/messagehome.php"><i class="fas fa-envelope"></i>message</a></li>
                <li><a href="<?php echo $link ?>index.php?content=logout"><i class="fas fa-times-circle"></i>log out</a></li>
            </ul>
        </div>
    </div>

</body>

</html>