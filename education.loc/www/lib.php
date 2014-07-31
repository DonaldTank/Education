<?php
/**
* Reterns reversed string.
*
* @param string|array $str String or array wich will be reversed. 
*
* @return string|null
*/
function strRevers($str) 
{	
	if (is_array($str)) {
		return strReversArray($str);
	}

	if (!is_string($str)) {
		return null;
	}

	$result = '';
	$strLen = strlen($str);

	for ($iter = 0; $iter < $strLen; $iter++) {
		$result .= substr($str, ($strLen - $iter - 1), 1); 
	}

	return $result;
}

/**
* Reterns reversed strings of all elements of array.
*
* @param array $array Array wich all string elements will be reversed.
*
* @return string
*/
function strReversArray($array) 
{
	if (!is_array($array)) {
		echo 'FATAL ERROR: Variable [$array] must be an array.';
		die();
	}

	$result = '';

	for ($index = 0; $index < count($array); $index++) {
		$result .= strRevers($array[$index]);
	}

	return $result;
}