<?php 

	$tpl = new Primel('views/landingView.html');

	// proteccion para averiguar si existe un parametro adicional dentro de lo que es la url de la seccion
	if(isset($_SECTION[1])){
		var_dump($_SECTION[1]);
	}
	

	
	$tpl->printToScreen();
 ?>