<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form method="post">
<textarea name="student"></textarea><br>
<input type="submit" name="submit" value="Save"> </form>
<?php
if(isset($_POST['submit'])) {
$student = $_POST['student'];
$file = fopen("student.txt", "w");
fwrite($file, $student);
fclose($file);
echo "Data has been written to student.txt.";
    }
	readfile("student.txt","r");
?>
</body>
</html>

