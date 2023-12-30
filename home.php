<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Scholar Program</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://images.unsplash.com/photo-1702277527666-c44a500be9db?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw0fHx8ZW58MHx8fHx8') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .navbar {
            background-color: #3498db;
            padding: 10px;
            text-align: center;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            color: black;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        .content {
            font-size: 16px;
        }

        .btn-group {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
            background-color: #3498db;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="home.php">Home</a>
    <!-- <a href="index.php">Home</a> -->
    <a href="dashboard.php">Dashboard</a>
    <a href="index.php">Logout</a>
    
</div>

<div class="container">
    <h2>Welcome to Scholar Program</h2>

    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "scholar";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to retrieve data from the database
    $sql = "SELECT name, phone, email FROM registers LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of the first row (assuming only one row)
        $row = $result->fetch_assoc();
        $name = $row["name"];
        $phone = $row["phone"];
        $email = $row["email"];
        ?>
        <div class="form-group">
            <label for="name">Name:</label>
            <p class="content"><?php echo $name; ?></p>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <p class="content"><?php echo $phone; ?></p>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <p class="content"><?php echo $email; ?></p>
        </div>
        <?php
    } else {
        echo "<p>No data in the database.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>

</div>

</body>
</html>
