<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM staff";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
	<title>Lab_Exam</title>
<body>
		<center><u><h1>STAFF</h1></u>

			<h2>STAFF List</h2>
      <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th>staff_id</th>
      		<th>staff_name</th>
            <th colspan='2'>Action</th>
      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<td><?php echo $information['staff_id'] ?></td>
						<td><?php echo $information['staff_name'] ?></td>
						<td>
							<a href="delete.php?delete_id=<?php echo $information['staff_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="edit.php?edit_id=<?php echo $information['staff_id']; ?>">Edit</i></a>
						</td>
					</tr>


					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="department.php"><input class="btn" type="button" id="list_btn" value="ADD"/></br></a>
						<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>
						
      </center>
</body>
</html>