<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM person, barangay WHERE person.persons_id = person.persons_id AND barangay.barangay_id = person.barangay_id";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
      		<th scope="col">|barangay name</th>



      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['persons_id']?></td>
							<td><?php echo $information['firstname']?></td>
							<td><?php echo $information['middlename']?></td>
							<td><?php echo $information['lastname']?></td>
							<td><?php echo $information['status']?></td>
							<td><?php echo $information['address']?></td>
							<td><?php echo $information['birth_date']?></td>
							<td><?php echo $information['barangay_name']?></td>


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