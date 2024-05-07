<?php

// Your database connection parameters
// $servername = "your_servername";
// $username = "your_username";
// $password = "your_password";
// $dbname = "your_dbname";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include("connect.php");
// Fetch subjects from the database
$sql = "SELECT id, name FROM subjects";
$result = $conn->query($sql);

$subjects = array();

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $subjects[] = array(
            'id' => $row['id'],
            'text' => $row['name']
        );
    }
}

// Close connection
$conn->close();

// Return subjects as JSON
echo json_encode($subjects);
?>
