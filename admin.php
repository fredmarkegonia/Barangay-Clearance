<?php
        if (isset($_SESSION["id"])){
            echo($_SESSION['username']);
			echo '';
            echo($_SESSION['password']);
            header('location:adminlogin.php');
        }else{
            $err = 'Invalid username/password';
        }
 ?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<title>barangay_clearance</title>
<body>
		<center><h1>OROQUIETA CITY</h1>
      					<br><a href ="addstaff.php"><input class="btn" type="button" id="list_btn" value="STAFF"/></br></a>
      					<br><a href ="abarangay.php"><input class="btn" type="button" id="list_btn" value="BARANGAY"/></br></a>	
      					<br><a href ="addcaptain.php"><input class="btn" type="button" id="list_btn" value="CAPTAIN"/></br></a>
      					<br><a href ="bclearancelist.php"><input class="btn" type="button" id="list_btn" value="CLEARANCE"/></br></a>
						<br><a href ="adminlogin.php"><input class="btn" type="button" id="list_btn" value="LOGOUT"/></br></a>

  		</center>
 </body>
 </html>