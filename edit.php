<?php
  session_start();
  require 'config.php';
  $contact_id = $_GET['edit_id'];
  
 	if(isset($_GET['edit_id'])){

	$get_contact = mysqli_query($con, "select * from staff where staff_id = '$contact_id'");

  $row = mysqli_fetch_array($get_contact);
   }

	
   if(isset($_POST['update'])){
		$staff_id = $_POST['staff_id'];
		$staff_name = $_POST['staff_name'];

    
    $update = "UPDATE `staff` SET `staff_id`='$staff_id',`staff_name`='$staff_name' WHERE staff_id=".$contact_id;
    if (mysqli_query($con, $update)) {

      header('location: list.php');
    }else {
      echo "Error: " . $update . "<br>" . mysqli_error($con);
    }

      }
        
?>
<!DOCTYPE html>
<html>
  <title>Lab_Exam</title>
<body>
    <center><u><h1>STAFF</h1></u>
     <h3>Edit STAFF</h3>
      <form action="edit.php?edit_id=<?php echo $_GET['edit_id']; ?>" method='post'>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <input type="hidden"  name="contact_id" value="<?php echo $row[0]; ?>">
      <label for="validationCustom01">staff ID</label>
      <input name="staff_id" type="text" value="<?php  echo $row['staff_id'];  ?>" class="form-control" id="validationCustom01" placeholder="staff ID"  autofocus required>
  </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">staff Name</label>
      <input name="staff_name" type="text" value="<?php  echo $row['staff_name'];  ?>" class="form-control"  id="validationCustom02" placeholder="staff Name" value="" required>
     </div>
          <form class="myform" method="post">
                    <input class="btn" type="submit" name ="update" id="save_btn" value="Update"/>
                    <a href ="list.php"><input class="btn" type="button" id="list_btn" value="List"/><br></a>
          </form>
    </form>
  </center>
</body>
</html>
