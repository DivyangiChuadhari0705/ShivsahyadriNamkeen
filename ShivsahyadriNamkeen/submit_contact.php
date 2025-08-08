<?php
// 1. Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shivsahyadri_db1";
$port = 4306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// 2. Connection error check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Get form data
$name     = isset($_POST['name']) ? $_POST['name'] : '';
$email    = isset($_POST['email']) ? $_POST['email'] : '';
$phone    = isset($_POST['phone']) ? $_POST['phone'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$message  = isset($_POST['message']) ? $_POST['message'] : '';

// 4. Insert query
$sql = "INSERT INTO contact_messages (name, email, phone, location, message) 
        VALUES ('$name', '$email', '$phone', '$location', '$message')";

// 5. HTML Response
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submission Status</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #00b09b 0%, #96c93d 100%);
      color: #fff;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .container {
      background-color: rgba(0, 0, 0, 0.2);
      padding: 40px 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      max-width: 500px;
      width: 90%;
      animation: slideDown 1s ease-out;
    }

    h1 {
      font-size: 2.5rem;
      margin-bottom: 15px;
    }

    p {
      font-size: 1.2rem;
    }

    .btn {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 20px;
      background-color: #ffffff;
      color: #00b09b;
      border: none;
      border-radius: 30px;
      font-weight: bold;
      text-decoration: none;
      transition: all 0.3s ease-in-out;
    }

    .btn:hover {
      background-color: #f1f1f1;
      color: #000;
    }

    @keyframes slideDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <?php if ($conn->query($sql) === TRUE): ?>
      <h1>✅ Message Sent Successfully!</h1>
      <p>Thank you for contacting us. We’ll get in touch soon.</p>
    <?php else: ?>
      <h1>❌ Submission Failed</h1>
      <p>Error: <?= $conn->error ?></p>
    <?php endif; ?>
    <a href="Home.php" class="btn">Back to Home</a>
  </div>
</body>
</html>

<?php
$conn->close();
?>
