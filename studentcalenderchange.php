<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./navbar.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="wrapper">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="./student.php"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="./studentcalender.php"><i class="fas fa-list"></i>Calender</a></li>
                <li><a href="./result.php"><i class="fas fa-chart-bar"></i>Results</a></li>
                <li><a href="./docent-message.php"><i class="fas fa-envelope"></i>Mail</a></li>
                <li><a href="./docent-message.php"><i class="fas fa-envelope"></i>Personal Settings</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
  <div class="row">
    <div class="col">
    <main class="container">
    <div class="row">

    </div>
    <div class="row">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 class="display-4">Setting a new date</h1>
            <p class="lead">If you would like to set a date to work, please  Vul full the form in.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-5">
          <form action="./studentcalender.php" method="post">
            <div class="form-group">
              <label for="Firstname" class="text-black" style="font-size:1vw">Full in a week number</label>
              <input type="text" class="form-control" id="Firstname" aria-describedby="firstnameHelp" placeholder="" name="Firstname">
            </div>
            <div class="form-group">
              <label for="infix" class="text-black" style="font-size:1vw" >what course do you work in?</label>
              <input type="text" class="form-control" id="infix" aria-describedby="infixHelp" placeholder="" name="infix">
            </div>
            <div class="form-group">
              <label for="lastname" class="text-black" style="font-size:1vw" >What day would you like to work?</label>
              <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="" name="lastname">
            </div>
            <div class="form-group">
              <label for="lastname" class="text-black" style="font-size:1vw" >What time would you like to work?</label>
              <input type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="" name="lastname">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-7">

      </div>
      <div class="col-12">
<center><h1 class="display-6 text-black">!If you change your mind please call us before 8:30 AM!</h1></center>
      </div>
    </div>
    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>