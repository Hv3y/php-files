<?php

$movies=array(6=>"    Need for speed", 9=>"   Wakanda forever", 8=>"    Megan",7=>"   Infinity pool");

echo "<h4> In original order</h4>";
foreach($movies as $key=>$value){
	
	echo $key . $value ."<br>";
}
echo "<br>";
echo "<h4> Sorted by title:</h4>";
asort($movies);
foreach($movies as $key=>$value){
	
	echo $key . $value ."<br>";
}
krsort($movies);
echo "<h4> Sorted in rating: </h4>";
foreach($movies as $key=>$value){
	
	echo $key . $value ."<br>";
}


?>