<?php
/*
* Monster Slayers - Heroes of Hesiod Gameboard
*/

$map_dir = "map/";
$map_img = ".png"; // only supporting png currently

// setup map (optimal size 800x640)
$g_map = "default";
if (isset($_GET['map'])) { 
    if ( file_exists($map_dir.$_GET['map'].$map_img) && (mime_content_type($map_dir.$_GET['map'].$map_img) == "image/png") ) {
        $g_map = $_GET['map']; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Monster Slayers - Heroes of Hesiod Map (alpha)</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	<link href='css/normalize.css' rel='stylesheet' type='text/css'>
	<link href='css/gameboard.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>  
    <script src="js/jquery.ui.touch-punch.min.js"></script>  
</head>
<body>
    <div id="game">
        <div id="gameboard">
            <div id="map" class="gb_item" style="background:url('<?=$map_dir.$g_map.$map_img?>') center center no-repeat"></div> 
            <div id="grid" class="gb_item"></div> 
        </div>
        
        <div id="shelf">
            <div id="characters">
                <div id="draggable1" class="draggable"><img src="img/evindol.png" alt="Player 1"/></div>
                <div id="draggable2" class="draggable"><img src="img/raen.png" alt="Player 2"/></div>
                <div id="draggable3" class="draggable"><img src="img/jorick.png" alt="Player 3"/></div>
                <div id="draggable4" class="draggable"><img src="img/yarrow.png" alt="Player 4"/></div>
                <div id="draggable5" class="draggable"><img src="img/bet.png" alt="Player 5"/></div>
            </div>

            <div id="monsters">
                <div id="draggable6" class="draggable"><img src="img/bullette.png" alt="Bullette"/></div>
                <div id="draggable7" class="draggable"><img src="img/beholder.png" alt="Beholder"/></div>
                <div id="draggable8" class="draggable"><img src="img/dragon.png" alt="Red Dragon"/></div>
                <div id="draggable9" class="draggable"><img src="img/pixie.png" alt="Pixie Swarm"/></div>
            </div>
        </div>
    </div>
<div id="title">Monster Slayers - The Heroes of Hesiod - Unofficial Map Sheet (alpha 0.1)</div>


</body>
<script>
$(".draggable").draggable();

$("#grid").droppable({
    over: function(event, ui) {
        $(".draggable").draggable({
            grid: [80, 80],
        });
    },
    out: function(event, ui) {
        $("#draggable").draggable("option", "grid", false);
    }
});
</script>
</html>
