<?php
$boolean = true;
$integer = 67;
$float = 3.1415;
$string = "Text";
$array = array('0' => 'o', '1' => 'r', '2' => 'a', '3' => 'n', '4' => 'g', '5' => 'e');
print_r($array);
//можно и так, но громоздко:
//$array[0]="o";
//$array[1]="r";
//$array[2]="a";
//$array[3]="n";
//$array[4]="g";
//$array[5]="e"; 
    echo "<p>";
	echo "<br>\$boolean = ".$boolean;
    echo "<br>\$integer = ".$integer; 
    echo "<br>\$string = ".$string;// вывод на экран $string = Текст
    echo "<br>\$float = ".$float;
	echo "</p>";
	// можно и так:
    echo "<br>\$array[0] = ".$array[0];
    echo "<br>\$array[1] = ".$array[1];
    echo "<br>\$array[2] = ".$array[2];
    echo "<br>\$array[3] = ".$array[3];
    echo "<br>\$array[4] = ".$array[4];
    echo "<br>\$array[5] = ".$array[5];
    echo "<br>";
	//можно и так
	  print "<pre>"; 
	  print_r($array);
	  print "</pre>";
    
?>

