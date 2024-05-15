<?php
$link=mysqli_connect("localhost", "root","","AD");
if($link==false){
die("Error: Could not connect");
}
else{echo "connected sucessfully";
}
$sql="INSERT INTO `AD`.`INFO`
(`id`,
`houseno`,
`street`,
`Adress`)
values
('1','90',' Pear',' Park'),
('3','10','Wild ','Midrand ')";
if(mysqli_query($link, $sql)){
echo "Insert Successfully";}
else{echo"Could not insert";
}






?>