<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);
	
	echo "<br><br>";
	$date = str_replace('-','/',$date);
	echo "2) " . $date;
	echo "<br>";
	if (strcmp($date,$tar)>0) { 
		echo'3) The Future';
	} else if (strcmp($date,$tar) == 0) { 
		echo'3) Oops';
	} else if (strcmp($date,$tar)<0) { 
		echo'3) The Past';
	} echo "<br>";
	echo "4) ";
	echo strpos($date, '/') . " " . strpos($date, '/','5');
	echo '<br>' . "5) ";
	$i = explode('/',$date);
	echo count($i);
	echo "<br>"; 
	echo "6) " . strlen($date);
	echo "<br>" . "7) ";
	echo ord($date);
	echo "<br>" . "8) " . substr($date,-2);
	echo "<br>" . "9) ";
	$q = explode('/',$date);
	echo $q[0];
	echo '  ' . $q[1];
	echo '  ' . $q[2];	
	echo "<br>" . "10) ";

 	if ((($year[0] % 4) == 0) && ((($year[0] % 100) != 0) || (($year[0] % 400) == 0))) {
		echo $year[0] . ': True, ';
	} else {
		echo $year[0] . ': False, ';
	}
 	if ((($year[1] % 4) == 0) && ((($year[1] % 100) != 0) || (($year[1] % 400) == 0))) {
		echo $year[1] . ': True, ';
	} else {
		echo $year[1] . ': False, ';
	}
 	if ((($year[2] % 4) == 0) && ((($year[2] % 100) != 0) || (($year[0] % 400) == 0))) {
		echo $year[2] . ': True, ';
	} else {
		echo $year[2] . ': False, ';
	}
 	if ((($year[3] % 4) == 0) && ((($year[3] % 100) != 0) || (($year[3] % 400) == 0))) {
		echo $year[3] . ': True, ';
	} else {
		echo $year[3] . ': False, ';
	}
 	if ((($year[4] % 4) == 0) && ((($year[4] % 100) != 0) || (($year[4] % 400) == 0))) {
		echo $year[4] . ': True, ';
	} else {
		echo $year[4] . ': False, ';
	}
 	if ((($year[5] % 4) == 0) && ((($year[5] % 100) != 0) || (($year[5] % 400) == 0))) {
		echo $year[5] . ': True, ';
	} else {
		echo $year[5] . ': False, ';
	}




?>
