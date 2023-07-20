<?php
			$artista=$_POST['artista'];
			$data =file_get_contents("https://api.deezer.com/artist/$artista" );
			echo $data;
?>
