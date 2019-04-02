<<<<<<< HEAD
<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM cedula";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Baranagay Clearance</title>
<body>
		<center>

			<h2>Cedula List</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|CEDULA NUMBER</th>
      		<th scope="col">|DATE</th>
      		<th scope="col">|AMOUNT</th>
      		<th scope="col">|PLACE</th>

      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['cedula_id']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['place']?></td>

							<td>
							<a href="deletecedula.php?delete_id=<?php echo $information['cedula_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="editcedula.php?edit_id=<?php echo $information['cedula_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addcedula.php"><input class="btn" type="button" id="list_btn" value="ADD CEDULA"/></br></a>
      					<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						

						
      </center>
</body>
=======
<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM cedula";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Baranagay Clearance</title>
<body>
		<center>

			<h2>Cedula List</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|CEDULA NUMBER</th>
      		<th scope="col">|DATE</th>
      		<th scope="col">|AMOUNT</th>
      		<th scope="col">|PLACE</th>

      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['cedula_id']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['place']?></td>

							<td>
							<a href="deletecedula.php?delete_id=<?php echo $information['cedula_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="editcedula.php?edit_id=<?php echo $information['cedula_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addcedula.php"><input class="btn" type="button" id="list_btn" value="ADD CEDULA"/></br></a>
      					<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						

						
      </center>
</body>
>>>>>>> 6be2c3316cb1cece023bc8d30b3acb9fbe501cc9
</html>