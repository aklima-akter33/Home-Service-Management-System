<?php
include 'db_config.php';

$sql = "SELECT id, service_name, price, category FROM services";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="service-card">
            <h3>' . htmlspecialchars($row["service_name"]) . '</h3>
            <p>Category: ' . htmlspecialchars($row["category"]) . '</p>
            <p><strong>$' . $row["price"] . '</strong></p>
            <button class="btn-book" onclick="bookService(' . $row["id"] . ')">Book Now</button>
        </div>';
    }
} else {
    echo "<p>No services available at the moment.</p>";
}

$conn->close();
?>