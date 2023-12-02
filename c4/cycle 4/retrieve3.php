<html>
<head>
</head>
<body>
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

$sql = "SELECT * FROM student";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	?>
	<table border="1">
	<tr>
	<th><?php echo "id:   " ?></th>
	<th><?php echo "Name:  " ?></th>
	<th><?php echo "course:  " ?></th>
	<th><?php echo "age:   " ?></th></tr>
	<?php
	
while($row = mysqli_fetch_assoc($result)) {
	?>
	<tr>
	<td><?php echo $row["id"] ?></td>
	
	<td><?php echo  $row["name"] ?></td>
	<td><?php echo  $row["course"] ?></td>
	<td><?php echo $row["age"] ?></td>
	</tr>
	</table>
	<?php
	
}
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 
</body>
</html>
