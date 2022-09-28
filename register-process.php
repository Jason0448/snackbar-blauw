<?php 


if ($_POST['firstname'] != '' && $_POST['lastname'] != '' && $_POST['phonenumber'] != '' && $_POST['email'] != '' && $_POST['password'] != '') {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

require "database.php";

$sql = "INSERT INTO users (firstname, lastname, phonenumber, email, password, role)
VALUES ('$firstname', '$lastname', '$phonenumber', '$email', '$password', 'klant')";

if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

}


?>