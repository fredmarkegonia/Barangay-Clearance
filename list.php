<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM person";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
	<title>Baranagay Clearance</title>
<body>
		<center>

			<h2>Person List</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|id</th>
      		<th scope="col">|first name</th>
      		<th scope="col">|middle name</th>
      		<th scope="col">|last name</th>
      		<th scope="col">|status</th>
      		<th scope="col">|address</th>
      		<th scope="col">|birthday</th>
      		<th scope="col">|barangay id</th>
      		<th scope="col">|staff id</th>


      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['persons_id']?></td>
							<td><?php echo $information['first_name']?></td>
							<td><?php echo $information['middle_name']?></td>
							<td><?php echo $information['last_name']?></td>
							<td><?php echo $information['status']?></td>
							<td><?php echo $information['address']?></td>
							<td><?php echo $information['birth_date']?></td>
							<td><?php echo $information['barangay_id']?></td>
							<td><?php echo $information['staff_id']?></td>

							<td>
							<a href="delete.php?delete_id=<?php echo $information['persons_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="edit.php?edit_id=<?php echo $information['persons_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="clearance.php"><input class="btn" type="button" id="list_btn" value="ADD PERSON"/></br></a>							
						<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>
						
      </center>
</body>
</html>