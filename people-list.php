<!-- first attempt -->
<!-- <table>
 table students 
<tr>
    <th>Voornaam Student</th>
    <th>Achternaam Student</th>
    <th>Klas</th>
    <th>Cijfer</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
  </tr>
  <tr><td>
      5
</td></tr>
  <tr>
    <td>11</td>
    <td>22</td>
    <td>33</td>
    <td>44</td>
  </tr>




table teachers
  <tr>
    <th>Voornaam Leraar</th>
    <th>Achternaam Leraar</th>
    <th>Klas</th>
  </tr>
  <tr>
    <td>1</td>
    <td>2</td>
    <td>3</td>
  </tr>
  <tr>
    <td>11</td>
    <td>22</td>
    <td>33</td>
  </tr>
</table> -->



<!-- crud opdracht -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
 <h1 class="text-center">Klas A Studenten</h1>
 <div class="row">
   <div class="col-12"></div>
  
 </div>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">klas/th>
      <th scope="col">voornaam</th>
      <th scope="col">achternaam</th>
      <th scope="col">cijfer</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    <tr>
        <td>A</td>
        <td>Sami</td>
        <td>Senel</td>
        <td>10</td>
        
    </tr>
  </thead>


  <table class="table">
  <h1 class="text-center">Klas A Leraren</h1>
  <thead>
    <tr>
      <th scope="col">Klas</th>
      <th scope="col">voornaam</th>
      <th scope="col">achternaam</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    <tr>
        <td>A</td>
        <td>Jesse</td>
        <td>Klaver</td>
        <td></td>
        
    </tr>
  </thead>
  <tbody>
 
        <?php
        // echo $records;
        ?>
  
  </tbody>
  
</table>
<a href="./index.php" type="button" class="btn btn-danger" btn-lg- btn-block>Nieuw record</a>        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <a href="./index.php">Home</a>
    
  </body>
</html>