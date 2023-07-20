<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Top</title>

</head>
<body>

    <div class="godace text-center">
        <h1>Top 10 - Music.</h1>
        <h2>GoDance</h2>
    
    
        
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form>
                    <input id="nameArtist" class="form-control" type="text" placeholder="Artist">
                        <br>
                    <a class="btn btn-primary" onclick="buscarArtistas(document.getElementById('nameArtist').value)">Buscar</a>
                </form>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h3 id="name"></h3>
                <img id="picture" src="" alt="">
                <p id="title"></p>
            </div>
        </div>
    </div>
    <br/>

    <script>
        function buscarArtistas(artista){
            $("#name").empty();
            $("#picture").empty();
            $("#title").empty();
                var settings ={
                    "async": true,
                    "crossDomain": true,
                   //"url": "https://api.deezer.com/search?q"+ artista,
                  "url": "https://api.deezer.com/search/q=" + artista,
                   "method": "GET"
                   
                }
                var i=0;
                var position=1;

                $.ajax(settings).done(function(response){
                    document.write(response);
                    $("#name").append("theren't band: "+ response.data[0].artist.name);
                    for (i=0; i<10; i++){
                        //$("#picture").append("no banda: "+ response.data[i].artist.picture_medium);

                        $("#title").append("<aside> # "+ position + ": "+ response.data[i].title +"</aside>");
                        position++;
                    
                    }
                });
        }
        </script>
        
</body>
</html>