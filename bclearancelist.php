<<<<<<< HEAD
<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM person, barangay, cedula, captain, staff, bclearance 
	WHERE person.persons_id = person.persons_id 
	AND cedula.cedula_id = cedula.cedula_id 
	AND captain.captain_id = captain.captain_id 
	AND staff.staff_id = staff.staff_id 
	AND person.persons_id = bclearance.persons_id 
	AND barangay.barangay_id=person.barangay_id
	AND cedula.cedula_id = bclearance.cedula_id 
	AND captain.captain_id=bclearance.captain_id
	AND staff.staff_id=bclearance.staff_id";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>CLEARANCE</title>

<body>
		<center>

			<h1>CLEARANCE</h1> </center>
			
		
			
      <center>
	  <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|Clearance Number</th>
      		<th scope="col">|Name</th>
      		<th scope="col">|Barangay Name</th>
      		<th scope="col">|Date</th>
      		<th scope="col">|Amount</th>
      		<th scope="col">|Cedula Number</th>
      		<th scope="col">|Captain Name</th>
      		<th scope="col">|Staff Name</th>
      		<th scope="col">|Purpose</th>
      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['clearance_id']?></td>
							<td><?php echo $information['firstname']?> <?php echo $information['middlename']?> <?php echo $information['lastname']?></td>
							<td><?php echo $information['barangay_name']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['cedula_id']?></td>
							<td><?php echo $information['first_name']?></td> 
							<td><?php echo $information['first_name1']?></td>
							<td><?php echo $information['purpose']?></td>

							<td>
							<a href="bclearancedelete.php?delete_id=<?php echo $information['clearance_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="bclearanceedit.php?edit_id=<?php echo $information['clearance_id']; ?>">Edit</i></a>
						</td>
						<td><br><a href ="print.php?clearance_id=<?php echo $information['clearance_id'];  ?>"><input class="btn" type="button" id="list_btn" value="PRINT"/></br></a></td>
					</tr
					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addclearance.php"><input class="btn" type="button" id="list_btn" value="ADD CLEARANCE"/></br></a>							
						<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>
						
      </center>
</body>
=======
<?php
session_start();
require 'config.php';
	$sql = "SELECT * FROM person, barangay, cedula, captain, staff, bclearance WHERE person.persons_id = person.persons_id AND barangay.barangay_id = barangay.barangay_id AND cedula.cedula_id = cedula.cedula_id AND captain.captain_id = captain.captain_id AND staff.staff_id = staff.staff_id AND person.persons_id = bclearance.persons_id AND barangay.barangay_id=bclearance.barangay_id AND captain.captain_id=bclearance.captain_id AND staff.staff_id=bclearance.staff_id";
	$records=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>CLEARANCE</title>

<body>
		<center>

			<h1>CLEARANCE</h1> </center>
			
		
			
      <center>
	  <table class="table table-bordered table-hover table-striped" >
      	<tr>
      		<th scope="col">|Clearance Number</th>
      		<th scope="col">|Name</th>
      		<th scope="col">|Barangay Name</th>
      		<th scope="col">|Date</th>
      		<th scope="col">|Amount</th>
      		<th scope="col">|Cedula Number</th>
      		<th scope="col">|Captain Name</th>
      		<th scope="col">|Staff Name</th>
      		<th scope="col">|Purpose</th>
      	</tr>
	       	<?php
      		while($information=mysqli_fetch_assoc($records)){
      			echo "<tr>";?>

						<tr>
							<td><?php echo $information['clearance_id']?></td>
							<td><?php echo $information['firstname']?> <?php echo $information['middlename']?> <?php echo $information['lastname']?></td>
							<td><?php echo $information['barangay_name']?></td>
							<td><?php echo $information['date']?></td>
							<td><?php echo $information['amount']?></td>
							<td><?php echo $information['cedula_id']?></td>
							<td><?php echo $information['first_name']?></td> 
							<td><?php echo $information['first_name1']?></td>
							<td><?php echo $information['purpose']?></td>

							<td>
							<a href="bclearancedelete.php?delete_id=<?php echo $information['clearance_id']; ?>">Delete</i></a>
						</td>
						<td>
							<a href="bclearanceedit.php?edit_id=<?php echo $information['clearance_id']; ?>">Edit</i></a>
						</td>
						<td><br><a href ="print.php?clearance_id=<?php echo $information['clearance_id'];  ?>"><input class="btn" type="button" id="list_btn" value="PRINT"/></br></a></td>
					</tr
					</tr>
    	<?php
    		}
      	?>
      	</table>
      					<br><a href ="addclearance.php"><input class="btn" type="button" id="list_btn" value="ADD CLEARANCE"/></br></a>							
						<br><a href ="index.php"><input class="btn" type="button" id="list_btn" value="HOME"/></br></a>
						
      </center>
</body>
>>>>>>> 6be2c3316cb1cece023bc8d30b3acb9fbe501cc9
</html>