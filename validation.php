<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?
$fullname= $email= $website= $message="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$fullname= test_input($_POST["name"]);
	$email= test_input($_POST["email"]);
	$website= test_input($_POST["website"]);
	$message= test_input($_POST["message"]);
}
	function test_input($data){
		$data= trim($data);
		$data= stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;
	}
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
	<tr><td>Full name: </td><td><input type="text" name="name"></td></tr>
	<tr><br><br></tr>
	<tr><td>Email:</td><td><input type="text" name="email"></td></tr>
	<tr><br><br></tr>
	<tr><td>Website:</td><td><input type="text" name="website"></td></tr>
	<tr><br><br></tr>
	<tr><td>Message:</td><td><textarea name="message" rows="5" cols="21"></textarea></td></tr>
	<tr><br><br></tr>
	<tr><td><input type="Submit" name="submit" value="submit"></td></tr>
	</table>
	</form>
	<?php
	echo"<h2> Your input are: </h2>";
	echo $fullname=($_POST["name"]);
	echo"<br>";
	echo $email= ($_POST["email"]);
	echo"<br>";
	echo $website=($_POST["website"]);
	echo"<br>";
	echo $message=($_POST["message"]);
	echo"<br>";
?>
</body>
</html>
