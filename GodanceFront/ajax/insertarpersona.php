<?php
			$name=$_POST['name'];
            $data = file_get_contents('http://localhost/GoDance/public/index.php/conexion/nueva/persona/');
			echo $data;
		?>