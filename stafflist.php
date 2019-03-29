<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM staff, barangay WHERE staff.staff_id = staff.staff_id AND barangay.barangay_id = staff.barangay_id";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Baranagay Clearance</title>
<body>
		<center>

			<h2>Staff List</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|ID NUMBER</th>
      		<th scope="col">|First Name</th>
      		<th scope="col">|Middle Name</th>
      		<th scope="col">|Last Name</th>
      		<th scope="col">|Baranagay Name</th>
      		<th scope="col">|User Name</th>
      		<th scope="col">|Password</th>


      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['staff_id']?></td>
							<td><?php echo $information['first_name1']?></td>
							<td><?php echo $information['middle_name']?></td>
							<td><?php echo $information['last_name']?></td>
							<td><?php echo $information['barangay_name']?></td>
							<td><?php echo $information['username']?></td>
							<td><?php echo $information['password']?></td>
							
							<td>
							<a href="deletestaff.php?delete_id=<?php echo $information['staff_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="editstaff.php?edit_id=<?php echo $information['staff_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addstaff.php"><input class="btn" type="button" id="list_btn" value="ADD STAFF"/></br></a>
      					<br><a href ="admin.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>						

						
      </center>
</body>
</html>