<?php
$servername = "localhost";
$username = "id17179794_test_systemrepair";
$password = "i4lX[BWVkzy@v38f";
$dbname = "id17179794_test_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>