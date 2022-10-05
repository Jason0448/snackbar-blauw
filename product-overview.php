
<?php

include 'header.php';

require 'database.php';

$sql = "SELECT * FROM products ";

if ($result = mysqli_query($conn, $sql)) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<table class="table">
    <thead>
        <h4>Producten</h4>
        <a href="add-product.php" class="btn btn-success">Nieuwe product aanmaken</a>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Kost Prijs</th>
            <th>Verkoop Prijs</th>
            <th>Categorie</th>
            <th>Beschrijving</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product["id"] ?></td>
                <td><?php echo $product["name"] ?></td>
                <td><?php echo $product["cost_price"] ?></td>
                <td><?php echo $product["selling_price"] ?></td>
                <td><?php echo $product["category"] ?></td>
                <td><?php echo $product["description"] ?></td>
                <td><a href="product-delete.php?id=<?php echo $product["id"] ?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>