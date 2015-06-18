<?php
/*
* Monster Slayers - The Heroes of Hesiod Character Sheets
*/

// i need these to function!
@require_once('lib/functions.php');

// load in character library
@require_once('lib/characters.php');
@require_once('lib/monsters.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Monster Slayers - The Heroes of Hesiod (Unofficial)</title>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
    <link href='css/normalize.css' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php 
        // social
        @include('lib/social.php');
        // analytics
        if (file_exists('lib/analytics.php')) {
            @include('lib/analytics.php');
        }
    ?>

</head>
<body>
    <div id="wrapper">
        <?php
        $char = false;
        // check our mode
        if (isset($_GET['char'])) {

            // load character sheet
            $cname = $_GET['char'];
            $char = $chars[$cname];
            @include('charsheet.php');

        } else if (isset($_GET['mon'])) {

            // load all monsters onto a single sheet
            foreach (array_keys($monsters) as $mon) {
                $cname = $mon;
                $char = $monsters[$mon];
                @include('charsheet.php');
            }

        } else {

            // we will show the menu
            @include('menu.php');

        }
        ?>
    </div> <!-- #wrapper -->
</body>
</html>
