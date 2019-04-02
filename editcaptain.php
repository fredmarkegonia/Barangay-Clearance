<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from captain where captain_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $captain_id = $_POST['captain_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];



    
    $update = "UPDATE `captain` SET `captain_id`='$captain_id',`first_name`='$first_name',`middle_name`='$middle_name',`last_name`='$last_name' WHERE captain_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: listcaptain.php');
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
		<center><u><h1>CAPTAIN</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">ID NUMBER</label>
	      			<input name="captain_id" type="number" class="form-control" id="validationCustom01" placeholder="id number" value="<?php echo $information['captain_id']?>" autofocus required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">First Name:</label>
				      <input name="first_name" type="text" class="form-control"  id="validationCustom05" placeholder="First Name" value="<?php echo $information['first_name']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">Middle Name</label>
	      			<input name="middle_name" type="text" class="form-control" id="validationCustom01" placeholder="Middle name" value="<?php echo $information['middle_name']?>" autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">Last Name:</label>
	      			<input name="last_name" type="text" class="form-control" id="validationCustom01" placeholder="Last name" value="<?php echo $information['last_name']?>" autofocus required>
    			</div>
    		</div>		
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="listcaptain.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>
