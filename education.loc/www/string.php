<?php
$str = 'abcd';
$result = '';
$strLen = strlen($str);

for ($iter = 0; $iter < $strLen; $iter++) {
	$result .= substr($str, ($strLen - $iter - 1), 1); 
}

echo $result;