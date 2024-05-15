<!DOCTYPE html>
<html>
<head></head>
<body>
<form method="post">
<input type="name" name="fname">
<input type="Submit" value="register">
</form>
</body>
</html>





<?php

$name=$_POST['fname'];
print "Hello," . $name;

?>