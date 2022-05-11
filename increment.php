<?php
include "connect2.php";


$sql="UPDATE countertable
SET NumberOfClicks = NumberOfClicks+1
WHERE Counter = 1";

if ($mysqli->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
  }



  include "index.php";
?>



  