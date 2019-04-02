<<<<<<< HEAD
<?php 
	session_start();
	require 'config.php';

	$clearance_id = isset($_GET['clearance_id']) ? $_GET['clearance_id']: null; 
	$sql = "SELECT * FROM person, barangay, cedula, captain, staff, bclearance 
			WHERE person.persons_id = person.persons_id
			AND cedula.cedula_id = cedula.cedula_id 
			AND captain.captain_id = captain.captain_id 
			AND staff.staff_id = staff.staff_id AND person.persons_id = bclearance.persons_id 
			AND barangay.barangay_id=person.barangay_id AND captain.captain_id=bclearance.captain_id 
			AND staff.staff_id=bclearance.staff_id and bclearance.clearance_id = ".   $clearance_id; 
			
	
	$res = mysqli_query($con, $sql);
	$line = mysqli_fetch_array($res);
	
?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>BG</title>
<body>
		<center><h1>Republic of the Philippines</h1>
		<h4>Province of Misamis Occidental</h4>	
		<h4>City of Oroquieta</h4>
		<h4>BARANGAY <u><?php echo ucfirst( $line["barangay_name"])?></u></h4></center>

		
		<center><h2>BARANGAY CLEARANCE</h2></center>
			
		<p>To Whom It May Concern:</p>
				<blockquote><p>This is to certify that <u><?php echo ucfirst( $line["firstname"] . " " .$line["middlename"] . " " .$line["lastname"] )?></u>,
				legal age, <u><?php echo $line["status"]; ?></u>, a bonafide resident of Barangay <u><?php echo ucfirst( $line["barangay_name"])?></u>, Oroquieta City is personally known by the undersigned as peaceful
				and law abiding citizen in the community</p></blockquote>			

				<blockquote><p>This is to certifies that he/she has no pending case or criminal
				involving moral turpitude neither he/she charge for any criminal case
				in the community or per records in the Barangay.</p></blockquote>
				
				<blockquote><p>This is to certification is issued upon the request of the aboved-
				named person in connection with his/her desire <u><?php echo ucfirst( $line["purpose"])?></u>.</p></blockquote></u>
			<blockquote><p>Given this <u><?php date_default_timezone_set('Asia/Manila'); echo date('F j, Y '); ?></u>at 
			Barangay Taboc Sur, Oroquieta City, Philippines.</p></blockquote>
			
			
			
		<center><u><?php echo ucfirst( $line["first_name"] . " " .$line["middle_name"] . " " .$line["last_name"] )?></u>
		          
	           	            

	           
			<h4>PUNONG BARANGAY</h4></br></br></br></center>
			
			<center><input class="btn btn-primary" type="button" onclick="window.print()" value="Print page"/>
			<a href ="bclearancelist.php"><input class="btn" type="button" id="list_btn" value="Back"/><br></a>

</body>
=======
<?php 
	session_start();
	require 'config.php';

	$clearance_id = isset($_GET['clearance_id']) ? $_GET['clearance_id']: null; 
	$sql = "SELECT * FROM person, barangay, cedula, captain, staff, bclearance 
			WHERE person.persons_id = person.persons_id
			AND barangay.barangay_id = barangay.barangay_id
			AND cedula.cedula_id = cedula.cedula_id 
			AND captain.captain_id = captain.captain_id 
			AND staff.staff_id = staff.staff_id AND person.persons_id = bclearance.persons_id 
			AND barangay.barangay_id=bclearance.barangay_id AND captain.captain_id=bclearance.captain_id 
			AND staff.staff_id=bclearance.staff_id and bclearance.clearance_id = ".   $clearance_id; 
			
	
	$res = mysqli_query($con, $sql);
	$line = mysqli_fetch_array($res);
	
?>

<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>BG</title>
<body>
		<center><h1>Republic of the Philippines</h1>
		<h4>Province of Misamis Occidental</h4>	
		<h4>City of Oroquieta</h4>
		<h4>BARANGAY <u><?php echo ucfirst( $line["barangay_name"])?></u></h4></center>

		
		<center><h2>BARANGAY CLEARANCE</h2></center>
			
		<p>To Whom It May Concern:</p>
				<blockquote><p>This is to certify that <u><?php echo ucfirst( $line["firstname"] . " " .$line["middlename"] . " " .$line["lastname"] )?></u>,
				legal age, <u><?php echo $line["status"]; ?></u>, a bonafide resident of Barangay <u><?php echo ucfirst( $line["barangay_name"])?></u>, Oroquieta City is personally known by the undersigned as peaceful
				and law abiding citizen in the community</p></blockquote>			

				<blockquote><p>This is to certifies that he/she has no pending case or criminal
				involving moral turpitude neither he/she charge for any criminal case
				in the community or per records in the Barangay.</p></blockquote>
				
				<blockquote><p>This is to certification is issued upon the request of the aboved-
				named person in connection with his/her desire <u><?php echo ucfirst( $line["purpose"])?></u>.</p></blockquote></u>
			<blockquote><p>Given this <u><?php date_default_timezone_set('Asia/Manila'); echo date('F j, Y '); ?></u>at 
			Barangay Taboc Sur, Oroquieta City, Philippines.</p></blockquote>
			
			
			
			<br><br><br><center>	            
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM captain";
		            	$res = mysqli_query($con, $sql);
		            ?>

		            <?php while ($line = mysqli_fetch_array($res)){ ?>
					<u><?php echo $line[1] ?> <?php echo $line[2] ?> <?php echo $line[3] ?></u>
		            <?php } ?>
		          
	           	            

	           
			<h4>PUNONG BARANGAY</h4></br></br></br></center>
			
			<center><input class="btn btn-primary" type="button" onclick="window.print()" value="Print page"/>
			<a href ="bclearancelist.php"><input class="btn" type="button" id="list_btn" value="Back"/><br></a>

</body>
>>>>>>> 6be2c3316cb1cece023bc8d30b3acb9fbe501cc9
</html>