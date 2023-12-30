<?php
// Database connection parameters
$servername = "localhost"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "scholar";    // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $problemName = mysqli_real_escape_string($conn, $_POST['problem_name']);
    $problemDescription = mysqli_real_escape_string($conn, $_POST['problem_description']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO scholar_program (phone, problem_name, problem_description)
            VALUES ('$phone', '$problemName', '$problemDescription')";

    if ($conn->query($sql) === TRUE) {
        header("Location: thanks.php");
        exit();
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
