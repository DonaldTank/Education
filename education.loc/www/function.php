<?php
include 'lib.php';

$oldStr = array(
	false, 
	'def', 
	'ghi', 
	array(
		'xyz', 
		'wtf'
	)
);
$revStr = strRevers($oldStr);

if (is_null($revStr)) {
	echo 'Incorrect string' . '<br>';
	echo 'Correct string - ' . strRevers('test');
} else {
	echo $revStr;
}

echo strReversArray('abc'); 