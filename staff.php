<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['staff_name'];
 
    $insert_information = "INSERT INTO `staff` (`staff_id`, `staff_name` ) VALUES ('$staff_id', '$staff_name')";
    
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
		<center><u><h1>STAFF</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom02">Staff ID</label>
				      <input name="staff_id" type="text" class="form-control"  id="validationCustom05" placeholder="staff ID" value="" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">Staff name</label>
	      			<input name="staff_name" type="text" class="form-control" id="validationCustom01" placeholder="staff name"  autofocus required>
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
