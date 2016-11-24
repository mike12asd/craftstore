<?php
    $email = $_POST['email'];

	$db_connect = mysqli_connect("localhost","root","itp2016!",'craftstore');
	$query = "DELETE FROM user WHERE Email = '$email'";
	mysqli_query($db_connect, $query);
	mysqli_close($db_connect);
	exit();
?>
