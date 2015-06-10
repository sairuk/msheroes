<div class="m_header">Monster Slayers</div>
<div class="m_subheader">- The Hereos of Hesiod-</div>
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
    <a href="map.php" title="Open Map">[ Map ]</a> -|- <a href="?mon" title="Monsters Sheet">[ Monsters ]</a>
</div>
