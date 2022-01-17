
<?php var_dump($_GET) ?>

<form action="./update-script.php" method="post">

<a>Chosen student number: <?php echo $_GET["studentnr"]?></a>
  <div class="slidecontainer">
      <label>Choose your rating</label>
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

  <input type="hidden" name="studentnr" value="<?php echo $_GET["studentnr"]?>">

  <input type="submit" value="Submit">
</form>

