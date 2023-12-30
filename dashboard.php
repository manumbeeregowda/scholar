<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Scholar Program</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            color: #333;
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
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .details {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-group {
            text-align: center;
            margin-top: 20px;
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

        /* Responsive styling */
        @media (max-width: 768px) {
            .container {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="home.php">Home</a>
    <a href="dashboard.php">dashboard</a>
    <a href="index.php">Logout</a>
   
</div>

<div class="container">
    <h2>Dashboard - Scholar Program</h2>

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
    $sql = "SELECT phone, problem_name, problem_description FROM scholar_program";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            $phone = $row["phone"];
            $problemName = $row["problem_name"];
            $problemDescription = $row["problem_description"];
            ?>
            <div class="details">
                <label>Phone Number:</label>
                <span><?php echo $phone; ?></span>
            </div>
            <div class="details">
                <label>Problem Name:</label>
                <span><?php echo $problemName; ?></span>
            </div>
            <div class="details">
                <label>Problem Description:</label>
                <p><?php echo $problemDescription; ?></p>
            </div>
            <?php
        }
    } else {
        echo "<p>No data in the database.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>

    <div class="btn-group">
        <button onclick="goBack()">Back</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</div>

</body>
</html>
