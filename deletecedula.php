<?php

  require 'config.php';

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from cedula where id = ".$contact_id;
  if (mysqli_query($con, $delete)) {
    header('location: cedulalist.php');
  }else {
    echo "Error: " . $contact_id . "<br>" . mysqli_error($con);
  }


?>