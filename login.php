<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 400px;
      margin: 100px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    input {
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
    }

    .btn-login {
      background-color: #3498db;
    }

    .btn-register {
      background-color: #2ecc71;
    }

    @media only screen and (max-width: 600px) {
      .container {
        width: 80%;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <form  action="loginph.php" method="post" >
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="btn-group">
      <button class="btn-login" type="submit">Login</button>
      <button class="btn-register" type="button" onclick="window.location.href='register.php';">Register</button>
    </div>
  </form>
</div>

</body>
</html>
