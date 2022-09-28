<?php

require 'database.php'

?>

<?php
$sql = "SELECT * FROM users ";

if ($result = mysqli_query($conn, $sql)) {
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user["id"] ?></td>
            <td><?php echo $user["firstname"] ?></td>
            <td><?php echo $user["lastname"] ?></td>
        </tr>
    <?php endforeach; ?>
</body>

</html>