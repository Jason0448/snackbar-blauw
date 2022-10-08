<?php
session_start();
include 'header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
    <title>Account</title>
</head>
<body>
<?php
        if (!empty($_SESSION["userData"])) {
            echo "<br>";
            echo "<h3>Uw informatie :</h3>";
            echo "<h4>ID : " . $_SESSION['userData']['id'];
            echo "<br>";
            echo "Voornaam : " . $_SESSION['userData']['firstname'];
            echo "<br>";
            echo "Achternaam : " . $_SESSION['userData']['lastname'];
            echo "<br>";
            echo "Email : " . $_SESSION['userData']['phonenumber'];
            echo "<br>";
            echo "Telefoonnummer : " . $_SESSION['userData']['email'];
            echo "<br>";
            echo "Rol : " . $_SESSION['userData']['role'];
            echo "<br>";
            echo "<br>";
        
?>
            <td><a href="logout.php" class="btn btn-danger">Uitloggen</a></td>
            
            <?php } else {
            echo "Je bent nog niet ingelogd, login om je gegevens te kunnen zien.";
        }  ?>
        
</body>
</html>