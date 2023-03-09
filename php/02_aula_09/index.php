<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body{
			background-color: yellow;
		}	
		@media screen and (max-width: 700px){
			body{
				background-color: red;
			}
		}
		@media screen and (max-width: 400px){
			body{
				background-color: lime;
			}
	
	</style>
</head>
<body>
	<?php 
		if (isset($_GET['play'])) {
			echo "clicou";
		}
	 ?>
	<form method="GET">
		<button type="submit" name="play">Enviar</button>
	</form>



</body>
</html>