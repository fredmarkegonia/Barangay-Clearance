<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $barangay_id = $_POST['barangay_id'];
    $barangay_name = $_POST['barangay_name'];


	
    $insert_information = "INSERT INTO  `barangay`(`barangay_id`, `barangay_name` ) VALUES ('$barangay_id', '$barangay_name')";
    
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
		<center><u><h1>Barangay</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-8 mb-4">
				      <label for="validationCustom03">ID_no:</label>
				      <input name="barangay_id" type="number" class="form-control"  id="validationCustom05" placeholder="id_no" value="" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">Barangay Name:</label>
	      			<input name="barangay_name" type="text" class="form-control" id="validationCustom01" placeholder="barangay_name"  autofocus required>
    			</div>
    		</div>
    		</div>			
			

			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="barangaylist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
  				</form>
		</form>
	</center>
</body>
</html>