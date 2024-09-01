<?php
include 'db_connection.php';

// Fetch and display all vehicles
$query = "SELECT * FROM vehicles";
$result = mysqli_query($conn, $query);

echo "<h2>Manage Vehicles</h2>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>" . $row['vehicle_name'] . " - Seats: " . $row['seats_available'] . "</p>";
    // Add options to edit or delete vehicles
}

mysqli_close($conn);
?>
