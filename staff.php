<<<<<<< HEAD
<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $insert_information = "INSERT INTO `users` (`username`, `password` ) VALUES ('$username', md5('$password'))";
    
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
	<title>BC</title>
<body>
		<center><u><h1>REGISTER</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom02">Username</label>
				      <input name="username" type="text" class="form-control"  id="validationCustom05" placeholder="username" value="" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">Password</label>
	      			<input name="password" type="password" class="form-control" id="validationCustom01" placeholder="password"  autofocus required>
    			</div>
    		</div>
   			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">Confirm Password</label>
	      			<input name="password" type="password" class="form-control" id="validationCustom01" placeholder="Cpassword"  autofocus required>
    			</div>
    		</div>			
			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="adminlogin.php"><input class="btn" type="button" id="list_btn" value="Login"/><br></a>
  				</form>
		</form>
	</center>
</body>
=======
<?php
  session_start();
  require 'config.php';
  if(isset($_POST['save'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $insert_information = "INSERT INTO `users` (`username`, `password` ) VALUES ('$username', md5('$password'))";
    
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
	<title>BC</title>
<body>
		<center><u><h1>REGISTER</h1></u>
		 <form class="needs-validation" action="" method='post'>
  			<div class="form-row">
  				<div class="col-md-4 mb-3">
				      <label for="validationCustom02">Username</label>
				      <input name="username" type="text" class="form-control"  id="validationCustom05" placeholder="username" value="" required>
    			</div>
    			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">Password</label>
	      			<input name="password" type="password" class="form-control" id="validationCustom01" placeholder="password"  autofocus required>
    			</div>
    		</div>
   			<div class="col-md-4 md-3">
	      			<label for="validationCustom01">Confirm Password</label>
	      			<input name="password" type="password" class="form-control" id="validationCustom01" placeholder="Cpassword"  autofocus required>
    			</div>
    		</div>			
			
    			<form class="myform" method="post">
				            <input class="btn" type="submit" name ="save" id="save_btn" value="Save"/>
				            <a href ="adminlogin.php"><input class="btn" type="button" id="list_btn" value="Login"/><br></a>
  				</form>
		</form>
	</center>
</body>
>>>>>>> 6be2c3316cb1cece023bc8d30b3acb9fbe501cc9
</html>