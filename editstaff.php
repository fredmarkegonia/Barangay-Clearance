<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from staff where staff_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $staff_id = $_POST['staff_id'];
    $first_name1 = $_POST['first_name1'];
    $middle_name1 = $_POST['middle_name1'];
    $last_name1 = $_POST['last_name1'];



    
    $update = "UPDATE `staff` SET `staff_id`='$staff_id',`first_name1`='$first_name1',`middle_name1`='$middle_name1',`last_name1`='$last_name1' WHERE staff_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: stafflist.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
    }

      }
        
?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>BG</title>
<body>
		<center><u><h1>STAFF</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">ID NUMBER</label>
	      			<input name="staff_id" type="number" class="form-control" id="validationCustom01" placeholder="id number" value="<?php echo $information['staff_id']?>" autofocus required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">First Name:</label>
				      <input name="first_name1" type="text" class="form-control"  id="validationCustom05" placeholder="First Name" value="<?php echo $information['first_name1']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">Middle Name</label>
	      			<input name="middle_name1" type="text" class="form-control" id="validationCustom01" placeholder="Middle name" value="<?php echo $information['middle_name1']?>" autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">Last Name:</label>
	      			<input name="last_name1" type="text" class="form-control" id="validationCustom01" placeholder="Last name" value="<?php echo $information['last_name1']?>" autofocus required>
    			</div>
    		</div>		
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">User Name:</label>
	      			<input name="username" type="text" class="form-control" id="validationCustom01" placeholder="username"  autofocus required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">Password:</label>
	      			<input name="password" type="password" class="form-control" id="validationCustom01" placeholder="password"  autofocus required>
    			</div>
			
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="stafflist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>