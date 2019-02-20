<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from persons where id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];


    
    $update = "UPDATE `persons` SET `id`='$id',`first_name`='$first_name',`middle_name`='$middle_name', `last_name`='last_name', `status`='$status',`address`='$address', `birth_date`='$birth_date' WHERE id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: list.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
    }

      }
        
?>
<!DOCTYPE html>
<html>
	<title>Lab_Exam</title>
<body>
		<center><u><h1>PERSON</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="id">ID:</label>
				      <input name="id" type="number" class="form-control"  id="id" placeholder="id" value="<?php echo $id?>" required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="first_name">First Name:</label>
				      <input name="first_name" type="text" class="form-control"  id="first_name" placeholder="First Name" value="<?php echo $first_name?>"  required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="middle_name">Middle Name</label>
	      			<input name="middle_name" type="text" class="form-control" id="middle_name" placeholder="Middle name" value="<?php echo $middle_name?>"  required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="last_name">Last Name:</label>
	      			<input name="last_name" type="text" class="form-control" id="last_name" placeholder="Last name" value="<?php echo $last_name?>"   required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="status">Status:</label>
	      			<input name="status" type="text" class="form-control" id="status" placeholder="status" value="<?php echo $status?>"   required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="address">Address:</label>
	      			<input name="address" type="text" class="form-control" id="address" placeholder="address" value="<?php echo $address?>"    required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="birth_date">Birthdate:</label>
	      			<input name="birth_date" type="date" class="form-control" id="birth_date" placeholder="birthdate" value="<?php echo $birth_date?>"  required>
    			</div>
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
