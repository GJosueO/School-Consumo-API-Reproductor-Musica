<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&family=Architects+Daughter&family=Righteous&display=swap" rel="stylesheet">
<script src="http://code.jQuery.com/jQuery-latest.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styleg.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="font/css/font-awesome.min.css">
    <title>Genre of Music</title>
  </head>
  <body>
    <div class="container">

    <h1>Genre of Music!</h1>
    <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
            <th>Genre of Music</th>
            <th>Number of Genre</th>
         </thead>  
         <tbody>
           
   		<?php
			$página_inicio = file_get_contents('http://localhost/GoDance/public/index.php/conexion/');
			$datos = json_decode($página_inicio, true);
     
        if(count($datos)>0){
          foreach($datos as $dato){
            echo  "<tr>" ;
            $ngenero=$dato['Genre'];
            $idgen=$dato['Id'];
              echo ("<td>$ngenero<td>");
              echo ("<td>$idgen<td>");
          }
        }
		?>
    </table>
    	<h1>Votes of Genre of Music!</h1>
      <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
           
            
            <th>Vote</th>
            <th>People</th>
            <th>Gender</th>
            <th>Date of Vote</th>
            <th>Number of Genre</th>
            
         </thead>  
         <tbody>
           
   		<?php
			$página_inicio = file_get_contents('http://localhost/GoDance/public/index.php/conexion/top/');
			$datos = json_decode($página_inicio, true);
     
        if(count($datos)>0){
          foreach($datos as $dato){
            echo  "<tr>" ;
            
            $vote=$dato['Id'];
            $name=$dato['Name'];
            $gender=$dato['Gender'];
            $date=$dato['Date'];
            $genderr=$dato['Genre'];
              echo ("<td>$vote<td>");
              echo ("<td>$name<td>");
              echo ("<td>$gender<td>");
              echo ("<td>$date<td>");
              echo ("<td>$genderr<td>");

          }
        }
		?>
    </table>
    
    </div>
  </body>
</html>
