<link rel="stylesheet" href="style.css">

<div class="heading2">

<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$database_in_use= "countclicks";


$mysqli = new mysqli($servername,$username,$password ,$database_in_use);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT Counter,NumberOfClicks FROM countertable";

$result = mysqli_query($mysqli, $sql);


if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	  echo " <h1> Number of hits: " . $row["NumberOfClicks"]." </h1><br>";
	}
  } else {
	echo "0 results";
  }

  ?>

</div>