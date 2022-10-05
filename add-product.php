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
  <title>Product aanmaken</title>
</head>

<body>
  
  <div class="container px-5 py-5">
  <br>
  <h3>Nieuwe product aanmaken</h3>
  
    <form action="add-product-process.php" method="post">
      <div class="form-group">
        <label for="exampleInputCategorie">Naam van product</label>
        <input type="naam" class="form-control" placeholder="Voer de product naam in" name="name" required>
      </div>
      <div class="form-group">
        <label for="exampleInputCategorie">Inkoopprijs</label>
        <input type="naam" class="form-control" placeholder="" name="cost_price" required>
      </div>
      <div class="form-group">
        <label for="exampleInputCategorie">Verkooppprijs</label>
        <input type="naam" class="form-control" placeholder="" name="selling_price" required>
      </div>
      <div class="form-group">
        <label for="exampleInputCategorie">Categorie</label>
        <input type="name" class="form-control" placeholder="Food or drinks" name="category" required>
      </div>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Beschrijving</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Beschrijf het product" rows="4" name="description" id="beschrijving"></textarea>
  </div>
      <br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


</html>
</body>

</html>