<<<<<<< HEAD
<?php

  require 'config.php';

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from captain where captain_id = ".$contact_id;
  if (mysqli_query($con, $delete)) {
    header('location: listcaptain.php');
  }else {
    echo "Error: " . $contact_id . "<br>" . mysqli_error($con);
  }


=======
<?php

  require 'config.php';

  $contact_id = $_GET['delete_id'];
  $delete= "Delete from captain where captain_id = ".$contact_id;
  if (mysqli_query($con, $delete)) {
    header('location: listcaptain.php');
  }else {
    echo "Error: " . $contact_id . "<br>" . mysqli_error($con);
  }


>>>>>>> 6be2c3316cb1cece023bc8d30b3acb9fbe501cc9
?>