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
$csid=$_POST["sid"];
$cname=$_POST["nam"];
$ccourse=$_POST["course"];
$cage=$_POST["age"];
$sql = "UPDATE student SET name='$cname',course='$ccourse',age='$cage' WHERE id=$csid";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 