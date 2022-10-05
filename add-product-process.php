
<?php
session_start();

print_r($_POST);

if ($_POST['name'] != '' && $_POST['cost_price'] != '' && $_POST['selling_price'] != '' && $_POST['category'] != '' && $_POST['description'] != '') {

    $name = $_POST['name'];
    $cost_price = $_POST['cost_price'];
    $selling_price = $_POST['selling_price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    
    require "database.php";
    

    $sql = "INSERT INTO products (name, cost_price, selling_price, category, description)
    VALUES ('$name', '$cost_price', '$selling_price', '$category', '$description')";

    if (mysqli_query($conn, $sql) === TRUE) {
        header("Location: product-overview.php");
    } else {
        echo "Foutmelding: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
    }

?>