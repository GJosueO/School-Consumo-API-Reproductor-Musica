<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/stylee.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&family=Architects+Daughter&family=Righteous&display=swap" rel="stylesheet">
<script src="http://code.jQuery.com/jQuery-latest.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</head>
<body>
	<div class="container">
		<h3>"Take this survey please"</h3>
<form id="formulario_respuestas">
		<h1>Name:</h1>
			<input class="form-control" id="nombre" type="text" placeholder="Name:">
		<h1>Gender:</h1>
			<input class="form-control" id="genero" type="text" placeholder="Gender:">
		<h1>Today:</h1>
			
       		<input class="form-control" id="fecha" type="text" placeholder="Gender of Music:">
       	<h2>Music Genre: </h2>
		   
		   <input class="form-control" id="gmusica" type="text" placeholder="Gender of Music:">	
				   
		   <button id="enviar"  >Send</button>   
    			
		  

</form>

<script>
		$("#enviar").click(function()){
			let nnombre = $("#nombre");
			let ngenero = $("#genero");
			var nfecha = $("#fecha");
			var ngenre = $("#gmusica");
			
    		
    		 $.ajax({
                data:  ( "Name": nnombre,"Gender": ngenero,"Date": nfecha,"Id": ngenre),
                url:   'ajax/insertarpersona.php',
                type:  'post',
                beforeSend: function () {
					$("#enviar").prop('disabled',true);
                        //$("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                       
                },
				complete:function(){
					$("#enviar").prop('disabled',false);
				}
			 });
    	
		}
		</script>
		
	</div>
</body>
</html>