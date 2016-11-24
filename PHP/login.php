<?php
    $email = $_POST['email'];
    $pw = $_POST['pw']; 
    
    $db_connect = mysqli_connect('localhost','root','itp2016!','craftstore');
    $query = "SELECT Email FROM user WHERE Email = '$email' AND Hash = '$pw'";
    $result = mysqli_query($db_connect, $query);
    $user = mysqli_fetch_array($result)[0];

    if($user == "") { // no success
        echo "false";
    }
	mysqli_close($db_connect);
	exit();
?>