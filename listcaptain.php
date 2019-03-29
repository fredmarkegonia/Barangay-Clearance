<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM captain, barangay WHERE captain.captain_id = captain.captain_id AND barangay.barangay_id = captain.barangay_id";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Baranagay Clearance</title>
<body>
		<center>

			<h2>Captain List</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|ID NUMBER</th>
      		<th scope="col">|First Name</th>
      		<th scope="col">|Middle Name</th>
      		<th scope="col">|Last Name</th>
      		<th scope="col">|Barangay Name</th>
      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['captain_id']?></td>
							<td><?php echo $information['first_name']?></td>
							<td><?php echo $information['middle_name']?></td>
							<td><?php echo $information['last_name']?></td>
							<td><?php echo $information['barangay_name']?></td>
							
							<td>
							<a href="deletecaptain.php?delete_id=<?php echo $information['captain_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="editcaptain.php?edit_id=<?php echo $information['captain_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addcaptain.php"><input class="btn" type="button" id="list_btn" value="ADD CAPTAIN"/></br></a>
      					<br><a href ="admin.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						

						
      </center>
</body>
</html>