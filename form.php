<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first form";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, mobilenumber, age, about, experience FROM form_1";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

// Output data as JSON
header("Content-Type: application/json");
echo json_encode($data);
?>