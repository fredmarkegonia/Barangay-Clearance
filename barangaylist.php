<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM barangay";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Baranagay Clearance</title>
<body>
		<center>

			<h2>barangay list</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|id no</th>
      		<th scope="col">|barangay name</th>

      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['barangay_id']?></td>
							<td><?php echo $information['barangay_name']?></td>


							<td>
							<a href="deleteabarangay.php?delete_id=<?php echo $information['barangay_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="editabarangay.php?edit_id=<?php echo $information['barangay_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="abarangay.php"><input class="btn" type="button" id="list_btn" value="ADD barangay"/></br></a>
      					<br><a href ="admin.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						

						
      </center>
</body>
</html>