<html>
<?php 

echo "<h1> PARKS protoype website goes here...</h1>";


?>

<?php echo "<p>attempting to connect to DB: parksdb</p>"; 
	echo "<p>user: parksdb | password: admin</p>";

?>

<?php 
// Create connection
$con=mysqli_connect("localhost","parksdb","admin","parksdb");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
	echo "<p>connection successful</p>";
}
?>

<p>Test complete </p>
</html>
