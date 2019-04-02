<<<<<<< HEAD
<?php
  session_start();
  require 'config.php';
  $sql = "SELECT * FROM person, barangay, cedula, captain, staff
		 WHERE person.persons_id = person.persons_id  AND barangay.barangay_id = barangay.barangay_id AND cedula.cedula_id = cedula.cedula_id AND captain.captain_id = captain.captain_id
		 AND staff.staff_id = staff.staff_id";
  if(isset($_POST['save'])){
    $clearance_id = $_POST['clearance_id'];
    $persons_id = $_POST['persons_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $cedula_id = $_POST['cedula_id'];
    $captain_id = $_POST['captain_id'];
    $purpose = $_POST['purpose'];

$sql = "SELECT * FROM person WHERE person.barangay_id = person.barangay_id";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);

    $barangay = $row['barangay_id']; 


	$bal = "SELECT staff_id FROM staff";
    $tes = mysqli_query($con, $bal);
    $row1 = mysqli_fetch_array($tes);

    $staff = $row1['staff_id']; 

    $insert_information = "INSERT INTO `bclearance` (`clearance_id`, `persons_id`,barangay_id, `date`, `amount`, `cedula_id`, `captain_id`
    ,staff_id,`purpose`) VALUES ('$clearance_id','$persons_id',$barangay,'$date','$amount','$cedula_id', '$captain_id',$staff,'$purpose')";
    	
    if (mysqli_query($con, $insert_information)) {
      echo"
        <script>
          var msg=confirm('New Record Inserted!!!');
          if(msg == true || msg==false){

          }
        </script>
      ";
    } else {
        echo "Error: " . $insert_information . "<br>" . mysqli_error($con);
    }

      }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<br>
	<center>
	<div>
		<h1>CLEARANCE</h1>
		 <form class="needs-validation" action="" method='post'>
    			<h4><div class="col-md-4 md-3">
	      			<label for="validationCustom04">CLEARANCE NUMBER</label>
	      			<input name="clearance_id" type="number" class="form-control" id="validationCustom01" placeholder=" clearance id"  autofocus required>
    			</div></h4>
	            <h4>PERSONS ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM person";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "persons_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['persons_id']; ?>"><?php echo $line[1] ?> <?php echo $line[2] ?> <?php echo $line[3] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
				<h4>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">DATE</label>
	      			<input name="date" type="date" class="form-control" id="validationCustom01" placeholder="date"  autofocus required>
    			</div>
				</h4>
				<h4>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT</label>
	      			<input name="amount" type="number" class="form-control" id="validationCustom01" placeholder="amount"  autofocus required>
    			</div>
				</h4>
	            <h4>CEDULA NUMBER:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM cedula";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "cedula_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['cedula_id']; ?>"><?php echo $line[0] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
	            <h4>CAPTAIN ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM captain";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "captain_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['captain_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
				<h4>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">Purpose</label>
	      			<input name="purpose" type="text" class="form-control" id="validationCustom01" placeholder="purpose"  autofocus required>
    			</div>
				</h4>				
	        </div>
	   


    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="bclearancelist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
  				</form>
	    </form>
	</div>
	</center>
</body>
=======
<?php
  session_start();
  require 'config.php';
  $sql = "SELECT * FROM person, barangay, cedula, captain, staff
		 WHERE person.persons_id = person.persons_id  AND barangay.barangay_id = barangay.barangay_id AND cedula.cedula_id = cedula.cedula_id AND captain.captain_id = captain.captain_id
		 AND staff.staff_id = staff.staff_id";
  if(isset($_POST['save'])){
    $clearance_id = $_POST['clearance_id'];
    $persons_id = $_POST['persons_id'];
    $barangay_id = $_POST['barangay_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $cedula_id = $_POST['cedula_id'];
    $captain_id = $_POST['captain_id'];
    $staff_id = $_POST['staff_id'];
    $purpose = $_POST['purpose'];


	
    $insert_information = "INSERT INTO `bclearance` (`clearance_id`, `persons_id`, `barangay_id`, `date`, `amount`, `cedula_id`, `captain_id`, `staff_id`,`purpose`) VALUES ('$clearance_id','$persons_id', '$barangay_id','$date','$amount','$cedula_id', '$captain_id','$staff_id','$purpose')";
    
    if (mysqli_query($con, $insert_information)) {
      echo"
        <script>
          var msg=confirm('New Record Inserted!!!');
          if(msg == true || msg==false){

          }
        </script>
      ";
    } else {
        echo "Error: " . $insert_information . "<br>" . mysqli_error($con);
    }

      }
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<br>
	<center>
	<div>
		<h1>CLEARANCE</h1>
		 <form class="needs-validation" action="" method='post'>
    			<h4><div class="col-md-4 md-3">
	      			<label for="validationCustom04">CLEARANCE NUMBER</label>
	      			<input name="clearance_id" type="number" class="form-control" id="validationCustom01" placeholder=" clearance id"  autofocus required>
    			</div></h4>
	            <h4>PERSONS ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM person";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "persons_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['persons_id']; ?>"><?php echo $line[1] ?> <?php echo $line[2] ?> <?php echo $line[3] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
	            <h4>BARANGAY ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM barangay";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "barangay_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['barangay_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
				<h4>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">DATE</label>
	      			<input name="date" type="date" class="form-control" id="validationCustom01" placeholder="date"  autofocus required>
    			</div>
				</h4>
				<h4>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT</label>
	      			<input name="amount" type="number" class="form-control" id="validationCustom01" placeholder="amount"  autofocus required>
    			</div>
				</h4>
	            <h4>CEDULA NUMBER:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM cedula";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "cedula_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['cedula_id']; ?>"><?php echo $line[0] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
	            <h4>CAPTAIN ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM captain";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "captain_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['captain_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
	            <h4>STAFF ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM staff";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "staff_id" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['staff_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
				<h4>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">Purpose</label>
	      			<input name="purpose" type="text" class="form-control" id="validationCustom01" placeholder="purpose"  autofocus required>
    			</div>
				</h4>				
	        </div>
	   


    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="bclearancelist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
  				</form>
	    </form>
	</div>
	</center>
</body>
>>>>>>> 6be2c3316cb1cece023bc8d30b3acb9fbe501cc9
</html>