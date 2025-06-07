<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = "Vr1@jado"; // Replace with your MySQL password
$dbname = "student";   // Replace with your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$roll_no = $_POST['rollNo'];
$course = $_POST['course'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (name, roll_no, course, email, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $roll_no, $course, $email, $phone, $password);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
