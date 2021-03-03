<?php
$mysql=mysqli_connect("localhost","root","","db_orisys");
if($mysql===false)
{
	die("Error could not connect".mysqli_connect_error($mysql));
}

?>