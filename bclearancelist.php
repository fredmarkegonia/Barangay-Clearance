<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM bclearance";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
	<title>CLEARANCE</title>
<body>
		<center>

			<h2>Clearance List</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|Clearance Number</th>
      		<th scope="col">|Person ID</th>
      		<th scope="col">|Barangay ID</th>
      		<th scope="col">|Date</th>
      		<th scope="col">|Amount</th>
      		<th scope="col">|Cedula Number</th>
      		<th scope="col">|Captain ID</th>
      		<th scope="col">|Staff ID</th>
      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['clearance_id']?></td>
							<td><?php echo $information['persons_id']?></td>
							<td><?php echo $information['barangay_id']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['cedula_id']?></td>
							<td><?php echo $information['staff_id']?></td>

							<td>
							<a href="bclearancedelete.php?delete_id=<?php echo $information['clearance_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="bclearanceedit.php?edit_id=<?php echo $information['clearance_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addclearance.php"><input class="btn" type="button" id="list_btn" value="ADD CLEARANCE"/></br></a>							
						<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>
						
      </center>
</body>
</html>