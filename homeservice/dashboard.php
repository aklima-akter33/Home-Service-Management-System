<?php
session_start();
if(!isset($_SESSION['user_id'])) { header("Location: login.php"); }
include 'db_config.php';
$uid = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="main-content">
        <h1>Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>
        <h3>Your Recent Bookings</h3>
        <table>
            <tr>
                <th>Service</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
            <?php
            $sql = "SELECT s.service_name, b.booking_date, b.status 
                    FROM bookings b 
                    JOIN services s ON b.service_id = s.id 
                    WHERE b.user_id = $uid";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['service_name']}</td>
                        <td>{$row['booking_date']}</td>
                        <td>{$row['status']}</td>
                      </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>