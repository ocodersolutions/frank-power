<?php
session_start(); 


if(!array_key_exists('userLogged', $_SESSION)){
  header("Location: login.php");
}
require 'database.php'; 
$conn = Database::connect();
$sql = "SELECT * FROM products";
$results = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($results)){
     $products[] = $row;
} ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Power</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    	<!-- Nortification -->
	    <?php if (isset($_SESSION['edit']) &&  $_SESSION['edit'] == 1) { ?>
	    	<div class="nortification">
		    	<div class="alert alert-success">
				  <strong>Edit Success !</strong> 
				</div>
			</div>
	   	<?php unset($_SESSION['edit']);} ?>

    	<?php if (isset($_SESSION['delete']) &&  $_SESSION['delete'] == 1) { ?>
	    	<div class="nortification">
		    	<div class="alert alert-success">
				  <strong>Delete Success !</strong> 
				</div>
			</div>
	   	<?php unset($_SESSION['delete']);} ?>

	   	<?php if (isset($_SESSION['add']) &&  $_SESSION['add'] == 1) { ?>
	    	<div class="nortification">
		    	<div class="alert alert-success">
				  <strong>Add Success !</strong> 
				</div>
			</div>
	   	<?php unset($_SESSION['add']);} ?>
    
<?php if (isset($_GET["action"]) && $_GET["action"] == "edit") { ?>
		<!-- Edit -->
		<?php $sql = "SELECT * FROM products WHERE id=".$_GET['id'] ;
		$results = mysqli_query($conn, $sql); 
		$edit = $results->fetch_array();  ?>
	    <div class="edit">
	    	<h2>Edit Product</h2>
			<form method="post" action="edit_product.php">
				<input type="hidden" name="id" value="<?php echo $edit['id']; ?>">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="name" class="form-control" name="name" value="<?php echo $edit['name']; ?>" placeholder="Enter name">
				</div>
				<div class="form-group">
					<label for="rating">Rating:</label>
					<input type="number" class="form-control" name="rating"  value="<?php echo $edit['rating']; ?>" placeholder="Enter rating">
				</div>
				<div class="form-group">
					<label for="model">Model:</label>
					<input type="text" class="form-control" name="model"  value="<?php echo $edit['model']; ?>" placeholder="Enter model">
				</div>
				<div class="form-group">
					<label for="starting-at">Starting at:</label>
					<input type="text" class="form-control" name="starting_at" value="<?php echo $edit['starting_at']; ?>" placeholder="Enter Starting at">
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea name="description" id="editor1" rows="10" cols="80">
		                <?php echo $edit['description']; ?>
		            </textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="../admin/manager_products.php"><button class="btn btn-info">Back to list</button></a>
			</form>
	    </div>

<?php }elseif (isset($_GET["action"]) && $_GET["action"] == "delete") { ?>
		<!-- Delete -->
		<div class="delete">
			<div class="alert alert-danger">Are you sure you want to delete this item ?</div>
			<a href="delete_product.php?id=<?php  echo $_GET['id']; ?>"><button type="button" class="btn btn-danger">Submit</button></a>
			<a href="../admin/manager_products.php"><button type="button" class="btn btn-info">Cancel</button></a>
		</div>

		<!-- Add new -->
<?php }elseif (isset($_GET["action"]) && $_GET["action"] == "add") { ?>
		<div class="edit">
	    	<h2>Add new product</h2>
			<form method="post" action="add_product.php">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="name" class="form-control" name="name" placeholder="Enter name">
				</div>
				<div class="form-group">
					<label for="rating">Rating:</label>
					<input type="number" class="form-control" name="rating" placeholder="Enter rating">
				</div>
				<div class="form-group">
					<label for="model">Model:</label>
					<input type="text" class="form-control" name="model" placeholder="Enter model">
				</div>
				<div class="form-group">
					<label for="starting-at">Starting at:</label>
					<input type="text" class="form-control" name="starting_at" placeholder="Enter Starting at">
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea name="description" id="editor1" rows="10" cols="80"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="../admin/manager_products.php"><button class="btn btn-info">Back to list</button></a>
			</form>
	    </div>
	

<?php }else{ ?>
		<!-- View -->
    	<div class="view">
	    	<h2>List Products</h2>

	    	<a href="?action=add"><button type="button" class="btn btn-success">Add new</button></a>
	    	<table class="table table-striped">
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>Name</th>
			        <th>Rating</th>
			        <th>Model</th>
			        <th>Starting at</th>
			        <th>Description</th>
			        <th>Action</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php  if (isset($products) && $products != null) {
			      foreach($products as $product){ ?>
			      <tr>
			      	<td><?php echo $product['id'];?></td>
			        <td><?php echo $product['name'];?></td>
			        <td><?php echo $product['rating'];?></td>
			        <td><?php echo $product['model'];?></td>
			        <td><?php echo $product['starting_at'];?></td>
			        <td><?php echo $product['description'];?></td>
			        <td>
				        <a href="?action=edit&id=<?php echo $product['id'];?>"><button type="button" class="btn btn-primary">Edit</button></a>
					    <a href="?action=delete&id=<?php echo $product['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a>
				    </td>
			      </tr>
			      <?php } } ?>
			    </tbody>
			</table>
		</div>
<?php } ?>

    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1',{
        	filebrowserBrowseUrl: '../Filemanager-master/index.html'
        });
    </script>
  </body>
</html>