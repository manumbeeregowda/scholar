<?php
// Establish a database connection (Replace with your database credentials)
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'scholar';

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process registration form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Insert user data into the database
    $sql = "INSERT INTO registers (email, phone, name, password_hash) VALUES ('$email', '$phone', '$name', '$password')";

    if (mysqli_query($conn, $sql)) {
        header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
