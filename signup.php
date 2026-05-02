<?php
include 'db_config.php';
$msg = "";

if(isset($_POST['signup'])) {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (full_name, email, password) VALUES ('$name', '$email', '$pass')";
    if($conn->query($sql)) {
        header("Location: login.php");
    } else {
        $msg = "Error: Email might already exist.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-container">
        <h2>Create Account</h2>
        <form method="POST">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="signup" class="btn-block">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
        <p style="color:red;"><?php echo $msg; ?></p>
    </div>
</body>
</html>