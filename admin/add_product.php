<?php session_start(); 
$name = $_POST["name"];
$rating = $_POST["rating"];
$model = $_POST["model"];
$starting_at = $_POST["starting_at"];
$description = $_POST["description"];

$sql = "INSERT INTO products (name, rating, model, starting_at, description)
VALUES  ('$name', '$rating','$model','$starting_at','$description')";
require 'database.php'; 
$conn = Database::connect();
$results = mysqli_query($conn, $sql); 
if ($results == true) {
	$_SESSION['add'] = 1;
	header("Location: ../admin/manager_products.php");
}?>

