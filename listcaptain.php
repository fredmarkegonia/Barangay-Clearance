<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM captain";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
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

      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['id']?></td>
							<td><?php echo $information['first_name']?></td>
							<td><?php echo $information['middle_name']?></td>
							<td><?php echo $information['last_name']?></td>

							<td>
							<a href="deletecaptain.php?delete_id=<?php echo $information['id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="editcaptain.php?edit_id=<?php echo $information['id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addcaptain.php"><input class="btn" type="button" id="list_btn" value="ADD CAPTAIN"/></br></a>
      					<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						

						
      </center>
</body>
</html>