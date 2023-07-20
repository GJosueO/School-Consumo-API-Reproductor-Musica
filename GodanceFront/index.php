<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="icons/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="js/busqueda.js">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="http://code.jQuery.com/jQuery-latest.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="js/html5slider.js"></script>
	
<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&family=Lobster&family=Quicksand:wght@700&family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Multimedia</title>
</head>
<body >
	<header>

			
		</div>
		<nav>
			<ul>
				<li><a href="" title=""><h1 class="home"> GODANCE</h1></a></li>

				<li><a href="" title="" class="menu">ALBUM</a></li>
				<li><a href="encuesta.php" title="" class="menu">SURVEY</a></li>
				<li><a href="top_up.php" title="" class="menu">TOP ARTST</a></li>
				<li><a href="" title="" class="menu">LYRICS</a></li>
				<li><a href="top_gen.php" title="" class="menu">TOP Genre</a></li>
				<li><a href="" title="" class="menu">HELP</a></li>
			</ul>
			
	</header><!-- /header -->

	<h4 ><button id="buscar"class="btn btn-outline-success">Buscar</button></h4>
	<form method="POST" id="fbusqueda">
	
	<h2><input type="text"name="artista"class="btn btn-outline-light btn-lg  " id="busqueda" placeholder="Search Artist..."> </h2>
	
    </form>
    
    <script type="text/javascript">
    	$("#buscar").click(function(){
    		let jartista= $("#busqueda").val();
    		 $.ajax({
                data:  $("#fbusqueda").serialize(),
                url:   'ajax/buscarartista.php',
                type:  'post',
                beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                       var obj = JSON.parse(response);
                       
                       $("#name").html(obj.name);

                      	$("#fan").html(obj.nb_fan+" fans");
                      	$("#tipo").html(obj.type);
                      	$("#imagen").html('src'.picture_medium);
                }
        });
    	});
    </script>
    <h1>Search your Artist: </h1>
<div class="container">
	<article>
		
		<section class="artistas">
			
			<img src="https://cdns-images.dzcdn.net/images/artist/e98d5ac2c0f3e1bc2ec4ca65eb88ed76/250x250-000000-80-0-0.jpg" >
			<h3 id="name" ></h3>
			
			<h6 id="fan"> </h6>
			
				<h5 id="tipo"></h5>
				
		</section>
		
		
			
			
	
	
	<br>

</div>
</div>	
	<br>
		</section>
	</article>
	

	
	

</div>
<br>
<br>




	<footer>
		<h1 class="font1">® Copyright</h1>
		<h6 class="font1">Josue Gomez Omaña</h2>
		<h6 >TID 401</h2>
		<h5>201110002@utvam.edu.mx</h5>
	</footer>
</body>
</html>