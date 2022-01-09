<?php
$conn = mysqli_connect("localhost","root","","foodordering");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>