<<<<<<< HEAD
<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from barangay where barangay_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $barangay_id = $_POST['barangay_id'];
    $barangay_name = $_POST['barangay_name'];



    
    $update = "UPDATE `barangay` SET `barangay_id`='$barangay_id',`barangay_name`='$barangay_name' WHERE barangay_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: barangaylist.php');
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
		<center><u><h1>Barangay</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">ID_no:</label>
				      <input name="barangay_id" type="number" class="form-control"  id="validationCustom05" placeholder="id_no" value="<?php echo $information['barangay_id']?>" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">Barangay Name:</label>
	      			<input name="barangay_name" type="text" class="form-control" id="validationCustom01" placeholder="barangay_name" value="<?php echo $information['barangay_name']?>" autofocus required>
    			</div>
    		</div>
    		</div>	
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="barangaylist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>
=======
<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from barangay where barangay_id = '$contact_id'");

  $information = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
    $barangay_id = $_POST['barangay_id'];
    $barangay_name = $_POST['barangay_name'];



    
    $update = "UPDATE `barangay` SET `barangay_id`='$barangay_id',`barangay_name`='$barangay_name' WHERE barangay_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: barangaylist.php');
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
		<center><u><h1>Barangay</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom03">ID_no:</label>
				      <input name="barangay_id" type="number" class="form-control"  id="validationCustom05" placeholder="id_no" value="<?php echo $information['barangay_id']?>" required>
    			</div>
    		</div>			
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom08">Barangay Name:</label>
	      			<input name="barangay_name" type="text" class="form-control" id="validationCustom01" placeholder="barangay_name" value="<?php echo $information['barangay_name']?>" autofocus required>
    			</div>
    		</div>
    		</div>	
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="barangaylist.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>
>>>>>>> 6be2c3316cb1cece023bc8d30b3acb9fbe501cc9
