<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from person where persons_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $persons_id = $_POST['persons_id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];
    $barangay_id = $_POST['barangay_id'];



    
    $update = "UPDATE `person` SET `persons_id`='$persons_id',`firstname`='$firstname',`middlename`='$middlename', `lastname`='lastname', `status`='$status',`address`='$address', `birth_date`='$birth_date',`barangay_id`='$barangay_id' WHERE persons_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: list.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
    }

      }
        
?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>Clearance</title>
<body>
		<center><u><h1>PERSON</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="id">ID:</label>
				      <input name="persons_id" type="number" class="form-control"  id="persons_id" placeholder="persons_id" value="<?php echo $information['persons_id']?>" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="firstname">First Name:</label>
				      <input name="firstname" type="text" class="form-control"  id="firstname" placeholder="First Name" value="<?php echo $information['firstname']?>"  required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="middlename">Middle Name</label>
	      			<input name="middlename" type="text" class="form-control" id="middlename" placeholder="Middle name" value="<?php echo $information['middlename']?>"  required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="lastname">Last Name:</label>
	      			<input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last name" value="<?php echo $information['lastname']?>"  required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="status">Status:</label>
	      			<input name="status" type="text" class="form-control" id="status" placeholder="status" value="<?php echo $information['status']?>"   required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="address">Address:</label>
	      			<input name="address" type="text" class="form-control" id="address" placeholder="address" value="<?php echo $information['address']?>"    required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="birth_date">Birthdate:</label>
	      			<input name="birth_date" type="date" class="form-control" id="birth_date" placeholder="birthdate" value="<?php echo $information['birth_date']?>"  required>
    			</div>
	            <h4>BARANGAY ID:
		            <?php 
		            	include "config.php";
		            	$sql = "SELECT * FROM barangay";
		            	$res = mysqli_query($con, $sql);
		            ?>
		            <select name= "barangay_id" value="<?php echo $information['barangay_id']?>" required>
		            	<option value=""></option>
		            <?php while ($line = mysqli_fetch_array($res)){ ?>
		            	<option value="<?php echo $line['barangay_id']; ?>"><?php echo $line[1] ?></option>
		            <?php } ?>
		            </select>
	            </h4>
    		</div>
    		</div>	
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="list.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>
