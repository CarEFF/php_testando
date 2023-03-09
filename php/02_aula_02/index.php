<?php


$dayweek = date("w");
echo $dayweek;
echo "<br>";

switch ($dayweek) {
	case '0':
		echo "hoje é domingo";
		break;
	case '1':
		echo "hoje é segunda";
		break;	
	case '2':
		echo "hoje é terça";
		break;
	case '3':
		echo "hoje é quarta";
		break;	
	case '4':
		echo "hoje é quinta";
		break;
	case '5':
		echo "hoje é sexta";
		break;
	default:
		echo "hoje é sábado";
		break;
}


?>