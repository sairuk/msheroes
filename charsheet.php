<div id="char_sheet">
    <div id="c_title"><?=$char['c_title'] ?></div>
    <div id="c_img"><img src="img/<?=imgCheck($cname) ?>.png" alt="Portrait of <?=$char['c_title'] ?>" /></div>
    <div id="c_typenum">
        <span id="c_type"><?=$char['c_type'] ?>,</span>
        <span id="c_num"><?=$char['c_num'] ?></span></div>
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

