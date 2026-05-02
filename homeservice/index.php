<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeService - Home</title>
    <!-- Linking the separate CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div style="color:white; font-size:20px; font-weight:bold;">HomeService</div>
        <div>
            <a href="index.php">Home</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="dashboard.php">Dashboard</a>
                <a href="profile.php">Profile</a>
                <a href="logout.php" style="color: #ff7675;">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="signup.php">Sign Up</a>
            <?php endif; ?>
        </div>
    </nav>

    <!-- Hero Section: Update 'style.css' later to add the background image -->
    <div class="hero-section">
        <h1>Find Professional Services for Your Home</h1>
    </div>
    
    <div class="main-content">
        <div class="container">
            <h2>Our Available Services</h2>
            <div class="service-grid">
                <?php 
                // This is the portion where we pull the services from the database
                include 'fetch_services.php'; 
                ?>
            </div>
        </div>
    </div>

    <script>
        // Basic function to handle the "Book Now" click
        function bookService(serviceId) {
            <?php if(isset($_SESSION['user_id'])): ?>
                alert("Processing booking for Service ID: " + serviceId);
                // In a real app, you would redirect to a booking processor here
            <?php else: ?>
                alert("Please login first to book a service!");
                window.location.href = 'login.php';
            <?php endif; ?>
        }
    </script>
</body>
</html>