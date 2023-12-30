<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission Confirmation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #2ecc71;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .confirmation-container {
      text-align: center;
    }

    .confirmation-message {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .right-mark {
      color: #3498db;
      font-size: 48px;
    }

    .btn-container {
      margin-top: 20px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin-right: 10px;
      text-decoration: none;
      color: #fff;
      background-color: #3498db;
      border-radius: 5px;
      font-size: 16px;
    }
  </style>
</head>
<body>

<div class="confirmation-container">
  <div class="right-mark">&#10004;</div>
  <div class="confirmation-message">
    Thank you for your submission. We will get back to you soon.
  </div>
  
  <div class="btn-container">
    <a href="home.php" class="btn">Home</a>
    <a href="dashboard.php" class="btn">Dashboard</a>
  </div>
</div>

</body>
</html>
