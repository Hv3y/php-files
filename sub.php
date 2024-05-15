<head>
</head>
<body>
<h1> Form submission</h1>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<table>
<tr><td>
<label for="Name" >First name</label></td><td>
<input type="text" name="Name" id="Name" placeholder="Enter Nmae here"></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td></td></tr>
<tr><td>
<label for="Country">Country</label></td><td>
<input type="text" name="Country" id="Country" placeholder="Enter a country"></td></tr>
</table>
<br>
<br>
<input type="submit" name="Submit" value="submit" >
</body>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$Name=$_POST["Name"];
	$country=$_POST["Country"];
	
	setcookie("Name",$Name,time()+3600);
	setcookie("Where",$country,time()+3600);
	
	header("Location: ".$_SERVER['PHP_SELF']);
	exit;
}
	?>
	
	<?php
	if(isset($_COOKIE["Name"]) && isset($_COOKIE["Where"])){
		
		echo "Cookie is set";
		echo "<br>";
		echo "Name is: ". $_COOKIE["Name"]."<br>";
	echo "Country is: ". $_COOKIE["Where"]."<br>";
	}else{
		echo "Cookie not set";
	}
			?>
