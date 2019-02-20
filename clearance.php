<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $status = $_POST['status'];
    $address = $_POST['address'];
    $birth_date = $_POST['birth_date'];

	
    $insert_information = "INSERT INTO  `persons`(`id`,`first_name`, `middle_name`, `last_name`, `status`, `address`, `birth_date` ) VALUES ('$id','$first_name', '$middle_name','$last_name','$status','$address','$birth_date')";
    
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
	<title>BG</title>
<body>
		<center><u><h1>PERSON</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">ID:</label>
				      <input name="id" type="number" class="form-control"  id="validationCustom05" placeholder="ID" value="" required>
    			</div>
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
    		</div>			
			

			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="list.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
  				</form>
		</form>
	</center>
</body>
</html>