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

// Process login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user credentials
    $sql = "SELECT * FROM registers WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $user['password_hash'])) {
            // Successful login, redirect to landing.php
            header("Location: landing.php");
            exit;
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

// Close the database connection
mysqli_close($conn);
?>
