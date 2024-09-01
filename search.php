<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $booking_date = $_GET['booking_date'];
    $vehicle_type = $_GET['vehicle_type'];

    $query = "SELECT * FROM vehicles WHERE vehicle_type='$vehicle_type'";
    $result = mysqli_query($conn, $query);

    echo "<h2>Available Vehicles</h2>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>" . $row['vehicle_name'] . " - Seats Available: " . $row['seats_available'] . "</p>";
        echo "<a href='book.php?vehicle_id=" . $row['id'] . "&date=" . $booking_date . "'>Book Now</a><br>";
    }

    mysqli_close($conn);
}
?>
