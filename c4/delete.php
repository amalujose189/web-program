<?php
$servername = "localhost";
$username = "23mca013";
$password = "2471";
$dbname = "23mca013";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$s="DELETE FROM student where id=103";

if (mysqli_query($conn, $s)) {
  echo "record deleted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>