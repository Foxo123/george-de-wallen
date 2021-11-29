<?php
// $id =$_GET["id"];




$sql = "SELECT * FROM `password` WHERE `rol` =  'student'";
$sql2 = "SELECT * FROM `student`";
$sqlname1 =  "SELECT `voornaam` FROM `student` WHERE `studentnr` = 1";
$frontname = mysqli_query($conn, $sqlname1);
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$record = mysqli_fetch_assoc($result);
$record2 = mysqli_fetch_assoc($result2);
$frontnamerecord = mysqli_fetch_assoc($frontname);
// echo "<pre>"; var_dump($record); echo "</pre";
?>


<form action="./update-script.php" method="post">
  <a type="text" class="form-control" id="voornaam" name="voornaam" value="voornaam">Voornaam <?php $frontnamerecord["voornaam"] ?> </a>
  <div class="slidecontainer">
    <input type="range" min="1.0" max="10.0" value="1" step="0.1" class="slider" id="myRange" name="cijfer">
  </div>
  <div id="demo">

  </div>
  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
      output.innerHTML = this.value;
    }
  </script>



  <input type="submit" value="Verstuur">
</form>
<a href="./read.php" method="post">read.php</a>
<a href="./create.php" method="post">create.php</a>