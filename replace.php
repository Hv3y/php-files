<?php
$sentence=readline ("Enter a sentence: ");
$insert=readline ("Enter a word you want to insert: ");
$replace= readline ("Enter a word you want to replace: ");
print(str_replace($replace, $insert,$sentence ));





?>