<?php

  require 'config.php';

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from barangay where barangay_id = ".$contact_id;
  if (mysqli_query($con, $delete)) {
    header('location: barangaylist.php');
  }else {
    echo "Error: " . $contact_id . "<br>" . mysqli_error($con);
  }


?>