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
      background-color: grey; /* Add a semi-transparent background color */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: green;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: black;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
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
  <a href="dashboard.php">Dashboard</a>
  <a href="index.php">Logout</a>
  
</div>

<div class="container">
  <h2>Welcome to Scholar Program</h2>
  <form action="landingph.php" method="post">
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="problem_name">Problem Name:</label>
      <input type="text" id="problem_name" name="problem_name" required>
    </div>
    <div class="form-group">
      <label for="problem_description">Problem Description:</label>
      <textarea id="problem_description" name="problem_description" rows="4" required></textarea>
    </div>
    <div class="btn-group">
      <button type="submit">Submit</button>
    </div>
  </form>
</div>

</body>
</html>
