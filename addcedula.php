<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $id = $_POST['id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $place = $_POST['place'];


	
    $insert_information = "INSERT INTO  `cedula`(`id`, `date`, `amount`, `place` ) VALUES ('$id','$date', '$amount','$place')";
    
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
		<center><u><h1>CEDULA</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">CEDULA NUMBER:</label>
	      			<input name="id" type="number" class="form-control" id="validationCustom01" placeholder="cedula number"  autofocus required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">DATE:</label>
				      <input name="date" type="date" class="form-control"  id="validationCustom05" placeholder="date" value="" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT:</label>
	      			<input name="amount" type="number" class="form-control" id="validationCustom01" placeholder="amount"  autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">PLACE:</label>
	      			<input name="place" type="text" class="form-control" id="validationCustom01" placeholder="place"  autofocus required>
    			</div>
    		</div>			
		
			

			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="cedulalist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
  				</form>
		</form>
	</center>
</body>
</html>