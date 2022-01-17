<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Dit is mijn eigen style.css-->
  <link rel="stylesheet" href="./css/style.css">
  <style>

  </style>
  <title></title>
</head>

<body>
<!-- Side navbar-->
<div class="wrapper">
    <div class="sidebar">
      
      <ul>
        <?php
        include("./side-navbar-student.php");
        ?>
      </ul>
    </div>
  </div>
<!-- -->
  <main class="container">
    <div class="row">

    </div>
    <div class="row">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h4 class="display-4">Inputting grades.</h4>
            <h4 class="lead">Please input the grades of the student.</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-5">
          <form action="./create.php" method="post">
            <div class="form-group">
              <label for="Firstname" class="text-white" style="font-size:1vw"></label>
              <input type="text" class="form-control" id="Firstname" aria-describedby="firstnameHelp" placeholder="Input: Student" name="Firstname">
            </div>
            <div class="form-group">
              <label for="infix" class="text-white" style="font-size:1vw" ></label>
              <input type="text" class="form-control" id="infix" aria-describedby="infixHelp" placeholder="Input: Name of student" name="infix">
            </div>
            <div class="form-group">
              <label for="lastname" class="text-white" style="font-size:1vw" ></label>
              <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Input: Grade" name="lastname">
            </div>
            <div class="form-group">
              <label for="lastname" class="text-white" style="font-size:1vw" ></label>
              <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Input: Description" name="lastname">
            </div>
            <a href="./result.php" type= "button" class="btn btn-danger btn-lg btn-block">apply</a>          </form>
        </div>
      </div>
      <div class="col-7">

      </div>
      <div class="col-12">
        <h4 class="display-4 text-black">please check your input before applying.</h4>
      </div>
    </div>
    </div>




  </main>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>