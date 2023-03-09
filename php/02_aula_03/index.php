<?php

$raffle = rand(0,5);

echo $raffle;."-";

switch ($raffle) {
	case '0':
		echo "vc perdeu";
		break;
	case '1':
		echo "vc ganhou";
		break;
	case '2':
		echo "jogue novamente";
		break;
	case '3':
		echo "não ganha nada";
		break;
	case '4':
		echo "vc perdeu";
		break;
	default:
		echo "nada";
		break;
}





?>