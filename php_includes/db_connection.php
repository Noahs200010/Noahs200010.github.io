<?php
$db_connection = mysqli_connect("mysql5.000webhost.com", "a9330704_nobo", "TheKiller101","a9330704_phat");

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
	exit();
} else {
	echo "Successful database connection!";
}
?>