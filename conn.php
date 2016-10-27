<?php
date_default_timezone_set("Asia/Jakarta");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wakontest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
	//echo "Koneksi sukses";
}
?>
