<?php session_start(); 
$id = $_GET["id"];
require 'database.php'; 
$conn = Database::connect();
$sql = "DELETE FROM products
WHERE id='$id'";
$results = mysqli_query($conn, $sql); 
if ($results == true) {
	$_SESSION['delete'] = 1;
	header("Location: ../admin/manager_products.php");
}?>