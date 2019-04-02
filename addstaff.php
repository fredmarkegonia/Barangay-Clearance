<?php
  session_start();
  require 'config.php';
      $sql = "SELECT * FROM barangay
		 WHERE barangay.barangay_id = barangay.barangay_id";
  if(isset($_POST['save'])){
    $staff_id = $_POST['staff_id'];
    $first_name1 = $_POST['first_name1'];
    $middle_name1 = $_POST['middle_name1'];
    $last_name1 = $_POST['last_name1'];
    $barangay_id = $_POST['barangay_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
	
    $insert_information = "INSERT INTO  `staff`(`staff_id`, `first_name1`, `middle_name1`, `last_name1`,  `barangay_id` , `username`, `password`) VALUES ('$staff_id','$first_name1', '$middle_name1','$last_name1','$barangay_id','$username','$password')";
    
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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>BG</title>
<body>
		<center><u><h1>STAFF</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">ID NUMBER</label>
	      			<input name="staff_id" type="number" class="form-control" id="validationCustom01" placeholder="id number"  autofocus required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">First Name:</label>
				      <input name="first_name1" type="text" class="form-control"  id="validationCustom05" placeholder="First Name" value="" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">Middle Name</label>
	      			<input name="middle_name1" type="text" class="form-control" id="validationCustom01" placeholder="Middle name"  autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">Last Name:</label>
	      			<input name="last_name1" type="text" class="form-control" id="validationCustom01" placeholder="Last name"  autofocus required>
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
				
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">User Name:</label>
	      			<input name="username" type="text" class="form-control" id="validationCustom01" placeholder="username"  autofocus required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">Password:</label>
	      			<input name="password" type="password" class="form-control" id="validationCustom01" placeholder="password"  autofocus required>
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