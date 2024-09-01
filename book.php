<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $vehicle_id = $_GET['vehicle_id'];
    $booking_date = $_GET['date'];

    // Assume user is logged in and user ID is stored in session
    session_start();
    $user_id = $_SESSION['user_id']; 

    // Book the ticket
    $query = "INSERT INTO bookings (user_id, vehicle_id, booking_date) VALUES ('$user_id', '$vehicle_id', '$booking_date')";

    if (mysqli_query($conn, $query)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
