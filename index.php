<?php
/*
* Monster Slayers - Hereos of Hesiod Character Sheets
*
* V:2050609 
* V:2050608
*/
$char = false;

@require_once('lib/characters.php');
@require_once('lib/monsters.php');

// check our mode
if (isset($_GET['char'])) {
    // load character sheet
    $char=$chars[$_GET['char']];
} else if (isset($_GET['mon'])) {
    // load monster sheet
    $char=$monsters[$_GET['mon']];
} else {
    // We will show the menu if $char=false
}

/*
*   Print HP dots, using checkbox
*/
function printHP($top) {
    foreach(range(1,$top) as $n) {
        echo ('<input class="c_hp_chk" type="checkbox" name="field'.$n.'" value="option">');
    }
}

/*
*  Check type of image we are using
*  return resulting image
*/
function imgCheck() {
    $c_img = "notfound.png";     // default image
    if ($char['c_img']) {
        $c_img = $char['c_img'];     // use custom image
    } else {
        $c_img = $_GET['char'];     // use char name image
    }
    return $c_img;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
	<link href='css/normalize.css' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="wrapper">
<?php
if ($char) {

/*
    Character Page
*/
?>
        <div id="char_sheet">
            <div id="c_title"><?=$char['c_title'] ?></div>
            <div id="c_img"><img src="img/<?=imgCheck() ?>.png" alt="Portrait of <?=$char['c_title'] ?>" /></div>
            <div id="c_typenum">
                <span id="c_type"><?=$char['c_type'] ?>,</span>
                <span id="c_num">Hero #<?=$char['c_num'] ?></span></div>
            <div id="details">
                <div id="c_ac"><span class="l_title">Armor Class:</span> <?=$char['c_ac'] ?></div>
                <div id="c_hp">
                    <span class="l_title">Hit Points:</span>
                    <span class="l_text"><?=$char['c_hp'] ?></span>
                    <div id="c_chk">
                        <form>
                          <?=printHP($char['c_hp']); ?>
                        </form>
                    </div>
                </div>
                <div id="c_speed"><span class="l_title">Speed:</span> <?=$char['c_speed'] ?></div>
                <?php if ($char['c_speed_desc']) { ?>
                <div id="c_speed_desc" class="l_desc"><?=$char['c_speed_desc'] ?></div>
                <?php } if ($char['c_ap']) { ?>
                <div id="c_ap"><span class="l_title">Attack Power:</span> <?=$char['c_ap'] ?></div>
                <?php } if ($char['c_ap_desc']) { ?>
                    <div id="c_ap_desc" class="l_desc"><?=$char['c_ap_desc'] ?></div>
                <?php } if ($char['c_ranged']) { ?>
                    <div id="c_ranged"><span class="l_title">Ranged:</span> <?=$char['c_ranged'] ?></div>
                <?php } if ($char['c_special']) { ?>
                    <div id="c_special"><span class="l_title">Special Power:</span> <?=$char['c_special'] ?></div>
                    <div id="c_special_desc" class="l_desc"><?=$char['c_special_desc'] ?></div>
                <?php } if ($char['c_critical']) { ?>
                    <div id="c_critical"><span class="l_title">Critial Hit:</span> <?=$char['c_critical'] ?></div>
                <?php } ?>
            </div>
        </div> <!-- #char_sheet -->
<?php
} else {
/*
    Select menu
*/
?>
        <div class="m_title">Select your Character</div>
        <div id="menu">
            <?php foreach ( array_keys($chars) as $m_char ) { ?>
                    <a href="?char=<?=$m_char?>" title="<?=$chars[$m_char]['c_title'] ?>">
                        <div class="m_char_wrapper">
                            <div class="m_char_img"><img src="img/<?=$m_char?>.png" alt=""/></div>
                            <div class="m_char_name"><?=$chars[$m_char]['c_title'] ?></div>
                            <div class="m_char_type"><?=$chars[$m_char]['c_type'] ?></div>
                        </div>
                    </a>
            <?php } ?>    
        </div> <!-- #menu -->
        <div class="m_gameboard">
            <a href="gameboard.php" title="Open Gameboard">Open Gameboard</a>
        </div>

<?php } ?>
    </div> <!-- #wrapper -->
</body>
</html>
