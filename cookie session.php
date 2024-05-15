<?php
$cname="User";
$cvalue="Lesedi Seema";
setcookie($cname, $cvalue,time()+(40*0*0));
if(!isset($_COOKIE[$cname])){
	echo "Cookie named" .$cname. "is not set";
}
else{
	echo "cookie named ".$cname. " is set <br>";
	echo "value is: ". $_COOKIE[$cname];
}




?>