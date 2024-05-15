<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1> Calculator</h1>





<form action=""method="POST">
<table border>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$n1=$_POST["n1"];
	$n2=$_POST["n2"];
	$choice=$_POST["choice"];
	$result;
}	
	switch($choice){
		case "addition";
		$result= $n1 + $n2;
		break;
	case "subtract";
		$result= $n1 - $n2;
		break;
	
	case "multiply";
		$result= $n1 * $n2;
		break;
		case "divide";
	if ($n2 !=0){
	$result= $n1/ $n2;}
	
	else{ echo "cannot divde by zero";
	

	
	}
}

?>

<tr><td> Your result</td><td><?php echo $result; ?></td></tr>
<tr><td>Enter number 1: </td><td><input type="number" name="n1" required></td></tr>
<tr><td>Enter Number 2: </td><td><input type="number" name="n2" required></td></tr>
<tr><td><Select name="choice" required>
<option value="addition">+</option>
<option value="subtract">-</option>
<option value="divide">/</option>
<option value="multiply">x</option>
</select></td></tr>
<tr><td rowspan="2"><input type="submit" value="Calculate" ></td> </tr>
</table>
</form>

</body>
</html>