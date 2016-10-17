<?php

$string = "This is an example string";

foreach (count_chars($string,1) as $i=>$val){
	echo "$val instances of \"", chr($i),"\" in the string.\n";
}

?>
