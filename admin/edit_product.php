<?php session_start(); 
$id = $_POST["id"];
$name = $_POST["name"];
$rating = $_POST["rating"];
$model = $_POST["model"];
$starting_at = $_POST["starting_at"];
$description = $_POST["description"];

$sql = "UPDATE products
SET name='$name', rating='$rating',model='$model',starting_at='$starting_at',description='$description' 
WHERE id='$id'";

require 'database.php'; 
$conn = Database::connect();
$results = mysqli_query($conn, $sql); 
if ($results == true) {
	$_SESSION['edit'] = 1;
	header("Location: ../admin/manager_products.php");
}?>