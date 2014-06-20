<?php
$boolean = true;
$integer = 0;
$float = 3.1415;
$string = "Text";
$array = array('0' => 'o', '1' => 'r', '2' => 'a', '3' => 'n', '4' => 'g', '5' => 'e');
//можно и так, но громоздко:
//$array[0]="o";
//$array[1]="r";
//$array[2]="a";
//$array[3]="n";
//$array[4]="g";
//$array[5]="e"; 
    echo "\$boolean = ",var_dump ($boolean),var_dump((int) $boolean);
    echo "<br>\$integer = ".$integer." ", var_dump ((bool) $integer);
    echo "<br>\$string = ".$string." ", var_dump ((bool) $string);
    echo "<br>\$float = ".$float." ", var_dump ((bool) $float);
	echo "<br>\$array = ", print_r($array), var_dump ((bool) $array);
	// можно и так:
 //	echo "<p>";
 //   echo "<br>\$array[0] = ".$array[0];
 //   echo "<br>\$array[1] = ".$array[1];
 //   echo "<br>\$array[2] = ".$array[2];
 //   echo "<br>\$array[3] = ".$array[3];
 //   echo "<br>\$array[4] = ".$array[4];
 //   echo "<br>\$array[5] = ".$array[5];
 //   echo "</p>";
	//можно и так
//	  print "<pre>"; 
//	  print_r($array);
//	  print "</pre>";
      echo "<p>";
	  echo "<br>' '-", var_dump((bool) "");        
      echo "<br>1-", var_dump((bool) 1); 
      echo "<br>-2-", var_dump((bool) -2);  
      echo "<br>eehhaa-", var_dump((bool) "eehhaa");
      echo "<br>false-", var_dump((bool) "false");
	  echo "<br>array()-", var_dump ((bool) array());
      echo "</p>";
   // $b = true;
	//if ($b = true)
	//{
	//echo "$b";
	//}
	//else 
	//{
	//echo "$b";
	//}
	 $b = false;
     echo $b ? 'true' : 'false'; //will output false
	?>
	

