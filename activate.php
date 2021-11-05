<?php


if (!(isset($_GET["content"]) && isset($_GET["em"]) && isset($_GET["pwh"]))) {
  header("Location: ./index.php?content=message&alert=hacker-alert");
}

include("./connect_db.php");
include("./functions.php");

$email = sanitize($_GET["em"]);

if (!check_userrole($email, array('klant', 'eigenaar', 'docent', 'begeleider')) )
{
  header("Location: ./index.php?content=message&alert=wrongactivationpage");
  exit();
} 
else {
?>


<div class="container my-5">
  <div class="row">
    <div class="col-12 col-sm-6">
      <form action="./index.php?content=activate_script" method="post">
        <div class="form-group">
          <label for="inputPassword">password:</label>
          <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" autofocus>
          <small id="passwordHelp" class="form-text text-muted">choose a safe password..</small>
        </div>
        <div class="form-group">
          <label for="inputPasswordCheck">password confirmation:</label>
          <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
          <small id="passwordHelpCheck" class="form-text text-muted">Ter controle voert u nogmaals uw wachtwoord in...</small>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-group">
              <label for="inputFirstName">firstname:</label>
              <input name="firstName" type="text" class="form-control" id="inputFirstName" aria-describedby="firstNameHelp">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="inputInfix">infix:</label>
              <input name="infix" type="text" class="form-control" id="inputInfix" aria-describedby="InfixHelp">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="inputLastName">last name:</label>
              <input name="lastName" type="text" class="form-control" id="inputLastName" aria-describedby="lastNameHelp">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPhoneNumber">phone number:</label>
          <input name="phoneNumber" type="tel" class="form-control" id="inputPhoneNumber" aria-describedby="phoneNumberHelp" pattern="06[0-9]{8}" placeholder="0612345678">
        </div>
        <input type="hidden" name="em" value="<?php echo $_GET["em"]; ?>">
        <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
        <button type="submit" class="btn btn-secondary btn-lg btn-block">Activeer</button>
      </form>
    </div>
    <div class="col-12 col-sm-6" style=" border-left: 2px solid;">
      <img src="./img/dewallen3.jpg" alt="perzik" class="w-100 mx-auto d-block">
    </div>
  </div>
</div>
<?php } ?>