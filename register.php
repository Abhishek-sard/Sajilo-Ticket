<?php
// Include the database connection file
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Secure password hashing

    // Insert user data into the database
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "Registration successful! You can now <a href='login.html'>Login</a>.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
