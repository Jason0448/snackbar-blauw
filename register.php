<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Registreer pagina</title>
</head>

<body>
  
  <div class="container px-5 py-5">
  <br>
  <h3>Registreren</h3>
  
    <form action="register-process.php" method="post">
      <div class="form-group">
        <label for="exampleInputVoornaam">Voornaam</label>
        <input type="voornaam" class="form-control" placeholder="Voer uw voornaam in" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="exampleInputAchternaam">Achternaam</label>
        <input type="achternaam" class="form-control" placeholder="Voer uw achternaam in" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="exampleInputTelefoonnummer">Telefoonnummer</label>
        <input type="telefoonnummer" class="form-control" placeholder="Voer uw telefoonnummer in" name="phonenumber" required>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail">Email Adres</label>
        <input type="email" class="form-control" placeholder="Voer uw email in" name="email" required>
      </div>
      <div class="form-group">
        <label for="exampleInputWachtwoord">Wachtwoord</label>
        <input type="password" class="form-control" placeholder="Wachtwoord" name="password" required>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


</html>
</body>

</html>