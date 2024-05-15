<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
$namee=$emaile=$websitee=$messagee="";
$name=$email=$website=$message="";


if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["name"])){
		$namee="Please enter a valid name";
		
	}
	else{
		$name=($_POST["name"]);
		if(!preg_match("/^[a-zA-Z-']*$/" , $name)){
		$namee="Letters and spaces only";
		
		}
	}
	
}
if(empty($_POST["email"])){
	$emaile="Enter an email";
	}
	else{
	$email=($_POST["email"]);

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$emaile="The email is inccorect";
	}
}
if(empty($_POST["website"])){
	$websitee="Enter a website";
	}
	else{
	$website=($_POST["website"]);
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0=9+&@#\/%?=~_|!:,..,]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
		
		$websitee="Enter a valid website";
		
	}
	}
	if(empty($_POST["message"])){
		$messagee=" ENter a meaasage";
		
	}
	
	
	else{
		$message=($_POST["message"]);
	}
	
		function($data){
		$data= trim($data);
		$data= stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;
	}
	

	?>
	<p><span class="error">* required field</span></p>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
	<tr><td>Full name: </td><td><input type="text" name="name"></td><td>
	<span class="error">* <?php echo $namee;?></span></td></tr>
	<tr><br><br></tr>
	<tr><td>Email:</td><td><input type="text" name="email"></td><td>
	<span class="error">* <?php echo $emaile;?></span></td></tr>
	<tr><br><br></tr>
	<tr><td>Website:</td><td><input type="text" name="website"></td><td>
	<span class="error">* <?php echo $websitee;?></span></td></tr>
	<tr><br><br></tr>
	<tr><td>Message:</td><td><textarea name="message" rows="5" cols="21"></textarea></td><td>
	<span class="error">* <?php echo $messagee;?></span></td></tr>
	<tr><br><br></tr>
	<tr><td><input type="Submit" name="submit" value="submit"></td></tr>
	</table>
	</form>
	<?php
	echo"<h2> Your input are: </h2>";
	echo $name;
	echo"<br>";
	echo $email;
	echo"<br>";
	echo $website;
	echo"<br>";
	echo $message;
	echo"<br>";
?>
</body>
</html>

		
