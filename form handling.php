
<head>
</head>
<body>
<h1>Find tours</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr><td><label for="FirstName">First Name: </labeL></td><td>
<input type="text" name="FirstName" id="FirstName" placeholder="Enter your first name"></td></tr>
<br></br>
<tr><td><label for="Email">Email: </label></td><td>
<input type="text" name="Email" id="Email" placeholder="Enter your email"></td></tr>

<tr><td><label for="region">Where would you like to go? </label></td><td>
<select name="region"id="region">
<option value="SA">SA</option>
<option value="Brasil">Brasil</option>
<option value="India">India</option>
<option value="Russia">Russia</option>
</select>

</td></tr>
<tr><td><p> Season you woudld like to visit the country</p></td><td>
<input type="radio" name="Season" id="Summer" value="Summer">
<label for="Summer">Summer</label>
<input type="radio" name="Season" id="Winter" value="Winter">
<label for="Winter">Winter</label>
<input type="radio" name="Season" id="Fall" value="Fall">
<label for="Fall">Fall</label>
<input type="radio" name="Season" id="Autum" value="Autum">
<label for="Autum">Autum</label>
</td></tr>

<tr><td><p> What are you interested in</p></td><td>
<input type="checkbox" name="intrest[]" id="Skiing" value="Skiing">
<label for="Skiing">Skiing</label>
<input type="checkbox" name="intrest[]" id="Swimming" value="Swimming">
<label for="Swimming">Swimming</label>
<input type="checkbox" name="intrest[]" id="Biking" value="Biking">
<label for="Biking">Biking</label>
<input type="checkbox" name="intrest[]" id="Party" value="Party">
<label for="Party">Party</label></td></tr>

<tr><td>
<label for="People"> Number of people</label></td><td>
<input type="number" name="People" id="People">
</td></tr>

<tr><td>
<label for="Message"> Write a review</label></td><td>
<textarea name="Message" id="Message" placeholder="Write" cols="20" rows="5"></textarea>
<td></tr>
</table>
<button type="submit">Send</button>
</body>
<?php
$name= $email= $region= $season= //$int= 
$people= $message="" ;

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$name= test_input($_POST["FirstName"]);
	$email= test_input($_POST["Email"]);
	$region= test_input($_POST["region"]);
	$season= test_input($_POST["Season"]);
	//$int= test_input($_POST["intrest"]);
	$people= test_input($_POST["People"]);
	$message= test_input($_POST["Message"]);
}
	function test_input($data){
		$data= trim($data);
		$data= stripslashes($data);
		$data= htmlspecialchars($data);
		return $data;
	}
	
	?>
<?php
echo"<h2> Your input are: </h2>";
	echo $name=($_POST["FirstName"]);
	echo"<br>";
	echo $email= ($_POST["Email"]);
	echo"<br>";
	echo $region=($_POST["region"]);
	echo"<br>";
	echo $mseason=($_POST["Season"]);
	echo"<br>";
	//echo $int=($_POST["intrest"]);
	echo"<br>";
	echo $people=($_POST["People"]);
	echo"<br>";
	echo $message=($_POST["Message"]);
	echo"<br>";
	?>
