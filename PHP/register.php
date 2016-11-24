<?php
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $description = $_POST['description'];

	$db_connect = mysqli_connect("localhost","root","itp2016!",'craftstore');
    $query = "SELECT Email FROM user WHERE Username = '$username' AND Email ='$email'";
    $result = mysqli_query($db_connect, $query);
    $user = mysqli_fetch_array($result)[0];

    if($user == "") { // only if username & email are still available
        $query = "INSERT INTO user(Username, Name, Email, Adresse, Telefonnummer, Profilbeschreibung, Hash) 
                VALUES ('$username','$name','$email','$address','$phone','$description','$pw')";
        mysqli_query($db_connect, $query);
        echo "true";
    }
	mysqli_close($db_connect);
	exit();
?>
