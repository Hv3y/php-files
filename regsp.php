<?php
$link=mysqli_connect("localhost","root","","reg");
	if($link==false){
	die("Error: Could not connect ");
}else{echo "connected sucessfully";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$username=mysqli_real_escape_string($link,$_REQUEST['username']);
	$password=mysqli_real_escape_string($link, $_REQUEST['password']);
	
	$sql= "SELECT * FROM `Users` WHERE username='$username' AND password='$passsword'";
	
$result = mysqli_query($query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo 'logged in';
    } else {
        echo 'register';
    }
} else {
    echo 'Error: ' . mysqli_error();
}
}
mysqli_close($mysqli);

?>