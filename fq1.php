<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
  $enrollment_number=$name=$birth_date=$contact_number=$email="";
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = array();
    $enrollment_number = $_POST["enrollment_number"];
    if (empty($enrollment_number)) {
        $errors[] = "Enrollment Number is required.";
    }

    $name = $_POST["name"];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    $birth_date = $_POST["birth_date"];
    if (empty($birth_date)) {
        $errors[] = "Birth Date is required.";
    }

    $contact_number = $_POST["contact_number"];
    if (empty($contact_number)) {
        $errors[] = "Contact Number is required.";
    }

    $email = $_POST["email"];
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (!empty($errors)) {
      
        echo "Please fix the following errors:<br>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
     
        echo "Form submitted successfully!";
 
    }
}
?>

<form action="q1p.php . <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Enrollment Number: <input type="text" name="enrollment_number"><br>
    Name: <input type="text" name="name"><br>
    Birth Date: <input type="date" name="birth_date"><br>
    Contact Number: <input type="text" name="contact_number"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>