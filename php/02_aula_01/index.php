<?php


$student = "dandara da silva";
$valueArray = [8,9,10];

$sumValues = array_sum(valueArray);
echo "<br>";

$countValues = count(valueArray);

$average = $sumValues / $countValues; 

echo $average;

if ($average >= 7) {
	echo "aluna".$student."foi aprovada"."com media".$average; 
}elseif ($average >= 4) {
	echo "aluna {$student} foi para recuperação com media {$average}"; 
}else ($average <4 ) {
	echo "aluna {$student} foi reprovada com media {$average}";
}

?>