<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from cedula where cedula_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $cedula_id = $_POST['cedula_id'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $place = $_POST['place'];



    
    $update = "UPDATE `cedula` SET `cedula_id`='$cedula_id',`date`='$date',`amount`='$amount',`place`='$place' WHERE cedula_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: cedulalist.php');
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
	<center><u><h1>CEDULA</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">CEDULA NUMBER:</label>
	      			<input name="cedula_id" type="number" class="form-control" id="validationCustom01" placeholder="cedula number" value="<?php echo $information['cedula_id']?>" autofocus required>
    			</div>
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">DATE:</label>
				      <input name="date" type="date" class="form-control"  id="validationCustom05" placeholder="date" value="<?php echo $information['date']?>" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom04">AMOUNT:</label>
	      			<input name="amount" type="number" class="form-control" id="validationCustom01" placeholder="amount" value="<?php echo $information['amount']?>" autofocus required>
    			</div>
    		</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom05">PLACE:</label>
	      			<input name="place" type="text" class="form-control" id="validationCustom01" placeholder="place" value="<?php echo $information['place']?>" autofocus required>
    			</div>
    		</div>				
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="cedulalist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>
