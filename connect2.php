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



  ?>

</div>