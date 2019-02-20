<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];


	
    $insert_information = "INSERT INTO  `staff`(`id`, `first_name`, `middle_name`, `last_name` ) VALUES ('$id','$first_name', '$middle_name','$last_name')";
    
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
		<center><u><h1>STAFF</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">ID NUMBER</label>
	      			<input name="id" type="number" class="form-control" id="validationCustom01" placeholder="id number"  autofocus required>
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
		
			

			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="stafflist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
  				</form>
		</form>
	</center>
</body>
</html>