<?php
 session_start();
 ?>
<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<center><h1>ADMIN</h1></center>
	<title>Log_in</title>
<body>
		<body>
		<div class="container text-center">
		<div class="row">
			<div class="header col-md-12">
			</div>
		</div>
	</div>
	
        <center><form method="post" action="include/login.inc.php">
		<label for="validationCustom02">username:</label>
            <input type="text" name="username" placeholder="username" required autofocus>
		<label for="validationCustom02">password:</label>
            <input type="password" name="password" placeholder="password"required>
			<input type="submit" name="submit" value="Login" class="button">	
        </form></center>
    </div>


	
 </body>
 </html>