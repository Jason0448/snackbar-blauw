<?php
include 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<div class="container px-5 py-5">
  <br>
  <h3>Inloggen</h3>
<form action="login-check.php" method="post">
<div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" class="form-control" placeholder="Voer uw email in" name="email" required>
      </div>
      <div class="form-group">
        <label for="exampleInputWachtwoord">Wachtwoord</label>
        <input type="password" class="form-control" placeholder="Wachtwoord" name="wachtwoord" required>
      </div>
      <?php
      if (!empty($_SESSION["wrong_pas"])) {
        if ($_SESSION["wrong_pas"] == true) {
          echo "<p style=color:red>Gegevens kloppen niet</p>";
        }
      } ?>
      <br>
      <button type="submit" class="btn btn-primary" name="submit">Log in</button>
</div>
</form>
</body>
</html>