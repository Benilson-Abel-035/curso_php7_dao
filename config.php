<?php 

	spl_autoload_register(function($class_name) {
		
		$filme_name = "class" .DIRECTORY_SEPARATOR. $class_name . ".php";

		if (file_exists($filme_name)) {

			require_once($filme_name);

		}

	});

?>