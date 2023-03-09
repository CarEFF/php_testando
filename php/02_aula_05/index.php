<<?php 

$arrayCities = ["aracaju", "socorro", "lagarto", "itabaiana"; "cristovão", "barreto",
"boquim",];


$countCities = count($arrayCities);

$i = 0

while ($i < $countCities) {
	 echo $arrayCities[$i];."<br>";
	 if ($i===4) {
	 	echo "===============";
	 	break;
	 }
	 $i++;

}





 ?>