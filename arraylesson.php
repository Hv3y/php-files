<?php
$array1=['lotter',true,1,1.05];
$array2= array (1,12,3,"way",false);
print ($array1[0]);
print "<br>";
print ($array2[3]);
foreach($array1 as $array){
	echo "<ul><li>".$array."</li></ul>";

}
$cars= array('Benz'=>'R300 000', 'BMW'=>'R256  0000', 'Audi'=>'R277 000');
print_r($cars);
echo"<br>";

echo $cars['Benz'];
echo"<br>";
echo"<table border>";
while ( $key=>$value){
echo "<tr><td>".$key."</td><td>" .$value."</td></tr>";}
echo"</table>";
echo"<br>";
$arrays= array(array(1,2,3),array(4,5,6), array(7,8,9));
print_r($arrays);
echo"<br>";
echo $arrays[2][2];
sqrt(9)

?>