<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from bclearance where clearance_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $clearance_id = $_POST['clearance_id'];
    $persons_id = $_POST['persons_id'];
    $barangay_id = $_POST['barangay_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $cedula_id = $_POST['cedula_id'];
    $captain_id = $_POST['captain_id'];
    $captain_id = $_POST['staff_id'];


    
    $update = "UPDATE `bclearance` SET `clearance_id`='$clearance_id',`persons_id`='$persons_id',`barangay_id`='$barangay_id', `date`='$date', `amount`='$amount',`cedula_id`='$cedula_id', `captain_id`='$captain_id', `staff_id`='$staff_id' WHERE clearance_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: bclearancelist.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
    }

      }
        
?>
<!DOCTYPE html>
<html>
	<title>clearance</title>
<body>
		<h1>CLEARANCE</h1>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">CLEARANCE NUMBER</label>
	      			<input name="clearance_id" type="number" class="form-control" id="validationCustom01" placeholder=" clearance id"  autofocus required>
    			</div>
	            <h4>PERSONS ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM persons";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "section" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['persons_id']; ?>"><?php echo $line[0] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
	            <h4>BARANGAY ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM barangay";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "section" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['barangay_id']; ?>"><?php echo $line[0] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">DATE</label>
	      			<input name="date" type="date" class="form-control" id="validationCustom01" placeholder="date"  autofocus required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT</label>
	      			<input name="amount" type="number" class="form-control" id="validationCustom01" placeholder="amount"  autofocus required>
    			</div>
	            <h4>CEDULA NUMBER:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM cedula";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "section" required>
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
		            <select name= "section" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['captain_id']; ?>"><?php echo $line[0] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
	            <h4>STAFF ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM staff";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "section" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['staff_id']; ?>"><?php echo $line[0] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
	        </div>
		
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="bclearancelist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>
