<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];
    $barangay_id = $_POST['barangay_id'];
    $captain_id = $_POST['captain_id'];	
    $staff_id = $_POST['staff_id'];	
	
    $insert_information = "INSERT INTO  `person`(`first_name`, `middle_name`, `last_name`, `status`, `address`, `birth_date`, `barangay_id`, `captain_id`, `staff_id` ) VALUES ('$first_name', '$middle_name','$last_name','$status','$address','$address','$birth_date','$barangay_id','$captain_id','$staff_id')";
    
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
	<title>Lab_Exam</title>
<body>
		<center><u><h1>PERSON</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">First Name:</label>
				      <input name="first_name" type="text" class="form-control"  id="validationCustom05" placeholder="First Name" value="" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">Middle Name</label>
	      			<input name="middle_name" type="text" class="form-control" id="validationCustom01" placeholder="Middle name"  autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">Last Name:</label>
	      			<input name="last_name" type="text" class="form-control" id="validationCustom01" placeholder="Last name"  autofocus required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom06">Status:</label>
	      			<input name="status" type="text" class="form-control" id="validationCustom01" placeholder="status"  autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom07">Address:</label>
	      			<input name="address" type="text" class="form-control" id="validationCustom01" placeholder="address"  autofocus required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">Birthdate:</label>
	      			<input name="birth_date" type="date" class="form-control" id="validationCustom01" placeholder="birthdate"  autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom09">Barangay ID:</label>
	      			<input name="barangay_id" type="number" class="form-control" id="validationCustom01" placeholder="barangay id"  autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom10">Captain ID</label>
	      			<input name="captain_id" type="number" class="form-control" id="validationCustom01" placeholder="captain id"  autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom011">Staff_ID:</label>
	      			<input name="staff_id" type="number" class="form-control" id="validationCustom01" placeholder="staff id"  autofocus required>
    			</div>
    		</div>			
			

			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="list.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
  				</form>
		</form>
	</center>
</body>
</html>