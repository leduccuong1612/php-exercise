<?php
$servername = "localhost";
$username = "root";
$password = "z123x456";
$dbname = "leduccuong";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE post (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(30),
description TEXT,
image VARCHAR(50),
status INT,
CREATE_AT DATETIME,
UPDATE_AT DATETIME
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>