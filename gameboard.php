<?php
/*
* Monster Slayers - Heroes of Hesiod Gameboard
*
* V:2050609 
* V:2050608
*
* References,
* https://jqueryui.com/draggable/#snap-to
* http://jsfiddle.net/j08691/mAzLA/1/
*/


// setup map (optimal size 800x640)
$g_map = "default";
if (isset($_GET['map'])) { $g_map = $_GET['map']; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Monster Slayers - Heroes of Hesiod Gameboard (alpha)</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	<link href='css/normalize.css' rel='stylesheet' type='text/css'>
	<link href='css/gameboard.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>    
</head>
<body>
<div id="title">Gameboard (alpha)</div>

    <div id="#gameboard">
        <div id="map" class="gameboard" style="background:url('map/<?=$g_map?>.png') center center no-repeat"></div> 
        <div id="grid" class="gameboard"></div> 
    </div>

    <div id="characters">
        <div id="draggable1" class="draggable"><img src="img/evindol.png" alt="Player 1"/></div>
        <div id="draggable2" class="draggable"><img src="img/raen.png" alt="Player 2"/></div>
        <div id="draggable3" class="draggable"><img src="img/jorick.png" alt="Player 3"/></div>
        <div id="draggable4" class="draggable"><img src="img/yarrow.png" alt="Player 4"/></div>
        <div id="draggable5" class="draggable"><img src="img/bet.png" alt="Player 5"/></div>
        <div id="draggable6" class="draggable"><img src="img/bullette.png" alt="Bullette"/></div>
        <div id="draggable7" class="draggable"><img src="img/beholder.png" alt="Beholder"/></div>
        <div id="draggable8" class="draggable"><img src="img/dragon.png" alt="Red Dragon"/></div>
        <div id="draggable9" class="draggable"><img src="img/pixie.png" alt="Pixie Swarm"/></div>
    </div>

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
        //$("#draggable").draggable("option", "grid", false);
    }
});
</script>
</html>
