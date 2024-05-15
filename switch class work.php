<?php
#Switch

$Day="Friday";
switch($Day){
	case"Monday": print"This is Monday";
	break;
	case"Tuesday": print"This is Tuesday";
	break;
	case"Wednesday": print"This is Wedneday";
	break;
	case"Thursday": print"This is Thurday";
	break;
	case"Friday": print"This is Friday";
	break;
	case"Saturday": print"This is Saturday";
	break;
	case"Sunday": print"HAve a nice Sunday!";
	break;
	default: print"Have a nice day!";
}

#if statement
print("<br>");

if($Day=="Friday"){
	print("This is Friday");

}
elseif($Day=="Monday"){
	print "This is Monday";

}
elseif($Day=="Tuesday"){
	print "This is Tuesday";

}
elseif($Day=="Wednesday"){
	print "This is Wednesday";

}
elseif($Day=="Thursday"){
	print "This is Thursday";

}
elseif($Day=="Saturday"){
	print "This is Saturday";

}
elseif($Day=="Sunday"){
	print "Have a nice Sunday!";

}

else{
	print("Have a nice day!");
}

?>