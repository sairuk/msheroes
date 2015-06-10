<?php

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
function imgCheck($cname) {
    $c_img = "notfound.png";     // default image
    if ($char['c_img']) {
        $c_img = $char['c_img'];     // use custom image
    } else {
        $c_img = $cname;     // use char name image
    }
    return $c_img;
}

?>
