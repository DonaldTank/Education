<?php
$myNewBestString = "this is float";
/**
* Проверить значение на строку 
* Проверить на массив
* Проверить на null
* Если строка: длина строки от 0 до 10 символов - вывести кол-во символов строки, если от 11 до 20 - вывести циклом каждый символ строки,
* иначе вывести циклом перевернутую строку (переварачивать каждый символ)
*    
* Если массив: кол-во элементов в массиве 0 - вывести строку empty array, если 1 элемент - вывести его, если 2 элемента - вывести второй элемент.
*
* Если null: вывести строку null.
*/
/*$myNewBestString = str_replace (".", ",", $myNewBestString);
echo $myNewBestString;
    $str = (string) '123456789';
 
    echo $str . "\n";
 
    $count = strlen( $str ) - 1  ;
 
    for( $i=0; $i<=$count; $i++ )
    {
        $str[ $count + $i + 1 ] = $str[ $count - $i ];
        $str[ $count - $i ] = '';
    }
 
    echo $str . "\n";*/
/**$i=1;
while ($i<=5) {
	echo $i;
    $i++;
}*/
/*$s = "hello";
$st1 = strlen($s);
echo $st1; 
$i1=1;
while (i1<$st1) {
	$s1[$st1-$i1] = $s[$i1];
	$i1++;
	echo $s1;
}*/

/*$str = 'Turn me baby';
for ($i = strlen ($str); $i>=0; $i--) $rev[] = $str[$i];
$revstr = implode (“”, $rev);
echo $revstr;*/
if (is_string($myNewBestString)) 
	{
		echo "string";
		if (strlen($myNewBestString)<=10) echo strlen($myNewBestString);
		if ((strlen($myNewBestString)>10) and (strlen($myNewBestString)<=20)) 
		{
            $i=0;
            while ($i<=20) 
            {
            	echo $myNewBestString[$i];
            	$i++;
            }
		}
		else 
		{
            
		}

    }
    elseif (is_array($myNewBestString)) echo "array";
        else if (is_float($myNewBestString)) echo "float";
            else if (is_null($myNewBestString)) echo "null";