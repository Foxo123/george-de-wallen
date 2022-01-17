<?php $link = determine_link_prefix("./index.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="stylesheet" href="./css/side-navbar-docent.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>control panel</h2>
            <ul>
                <li><a href="<?php echo $link ?>docent-home.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="./schedule.php"><i class="fas fa-list"></i>Schedule</a></li>
                <li><a href="./result.php"><i class="fas fa-chart-bar"></i>Results</a></li>
                <li><a href="./message/messagehome.php"><i class="fas fa-envelope"></i>message</a></li>
                <li><a href="<?php echo $link ?>index.php?content=logout"><i class="fas fa-times-circle"></i>log out</a></li>
            </ul>
        </div>
    </div>

</body>

</html>