<?php
session_start();
if(!isset($_SESSION['user_id'])) { header("Location: login.php"); }
include 'db_config.php';
$uid = $_SESSION['user_id'];
$user = $conn->query("SELECT * FROM users WHERE id=$uid")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav><a href="dashboard.php">Back to Dashboard</a></nav>
    <div class="auth-container" style="max-width: 600px;">
        <h2>User Profile</h2>
        <p><strong>Name:</strong> <?php echo $user['full_name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <p><strong>Account Role:</strong> <?php echo ucfirst($user['role']); ?></p>
        <p><strong>Member Since:</strong> <?php echo date('M Y', strtotime($user['created_at'])); ?></p>
        <br>
        <button onclick="window.print()" class="btn-block" style="background:#7f8c8d;">Print Details</button>
    </div>
</body>
</html>