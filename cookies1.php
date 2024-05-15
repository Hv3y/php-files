<?php
setcookie("user","Lesedi Seema",time()-1*60*3600);
setcookie("age","20",time()-1*60*3600);
if(isset($_COOKIE['user'])){
echo"Hi ". $_COOKIE['user'];}
if(isset($_COOKIE['age'])){
echo" your age is ". $_COOKIE['age'];}
else{
echo" Cookies are not set";}

?>