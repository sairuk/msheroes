<?php
/*
* Monster Slayers - Hereos of Hesiod Monster Data
* 
* V:2050608
*/

$monsters = array(
    'bullette' => array(
        'c_img' => false,
        'c_title' => 'Bullette',
        'c_type' => false,
        'c_num' => 1,
        'c_ac' => 15,
        'c_hp' => 8,
        'c_speed' => 5,
        'c_speed_desc' => 'When the bullette moves, it burrows into the ground and can pop up anywhere within 5 squares of where it was. The hole always closes behind it.',
        'c_ap' => 'Gaping Maw 1d20 (or 3d6)',
        'c_ap_desc' => 'Deals 1 point teeth damage.',
        'c_ranged' => false,
        'c_special' => 'Swallow 1d20 (or 3d6)',
        'c_special_desc' => 'The bullette swallows the hero. At the beginning of every turn in which the hero starts out swallowed, the hero must take 1 point of damage from stomach acid. The swallowed hero can then choose to attack or to “tickle” the monster. If the hero attacks, he or she automatically succeeds. If he or she “tickles,” the player rolls 1d20, and if 11 or higher is rolled, the hero gets coughed up. (Or, roll 1d6. A 4 or higher means they succeed in getting coughed up.) A bullette can only have one hero in its stomach at a time. When the bullette is killed, swallowed heroes are coughed up',
        'c_critical' => false,
        'c_intro' => false
    ),
    'pixie' => array(
        'c_img' => false,
        'c_title' => 'Pixie Swarm',
        'c_type' => false,
        'c_num' => 4,
        'c_ac' => 10,
        'c_hp' => 11,
        'c_speed' => 6,
        'c_speed_desc' => false,
        'c_ap' => 'Glamour 1d20 (or 3d6)',
        'c_ap_desc' => 'The pixies are so pretty! They dazzle the hero with their magical colors. Roll twice and take the best result. If the pixies’ attack hits, the pixies enter the hero’s square, and the hero cannot attack them until they leave the hero’s square. Pixies switch who they try to glamour every turn.',
        'c_ranged' => false,
        'c_special' => 'Swarm',
        'c_special_desc' => 'When a hero is under the effects of the pixie swarm’s glamour, the hero takes 1 point of swarm damage at the beginning of the turn, and any hero who hits the pixie swarm must also roll 1d20. If a 10 or below is rolled, the pixes also deal 1 point of damage to the glamoured hero. (Or, roll 1d6. A 3 or lower means they hit.)',
        'c_critical' => false,
        'c_intro' => false
    ),
    'dragon' => array(
        'c_img' => false,
        'c_title' => 'Red Dragon',
        'c_type' => false,
        'c_num' => 3,
        'c_ac' => 14,
        'c_hp' => 10,
        'c_speed' => 4,
        'c_speed_desc' => false,
        'c_ap' => 'Fiery Breath 1d20 (or 3d6)',
        'c_ap_desc' => 'Deals 1 point fire damage. If it hits with its first attack, it rolls 1d20 for each hero standing next to the hero it hits. If it rolls a 10 or above, it deals 1 point of fire damage to that hero as well. (Or, roll 1d6. A 4 or higher means it hits that hero as well.)',
        'c_attack' => 'attack',
        'c_ranged' => ' The red dragon’s fiery breath can hit any creature within 6 squares of it, within line of sight.',
        'c_special' => 'Tail Swipe 1d20 (or 3d6)',
        'c_special_desc' => 'The dragon swipes at a hero with its tail. If it hits, the hero is knocked to the ground, and instead of moving next turn, the hero must just stand up.',
        'c_critical' => false,
        'c_intro' => false
    ),
    'beholder' => array(
        'c_img' => false,
        'c_title' => 'Beholder',
        'c_type' => false,
        'c_num' => 2,
        'c_ac' => 12,
        'c_hp' => 9,
        'c_speed' => 3,
        'c_speed_desc' => '',
        'c_ap' => 'Eyestalk Rays 1d20 (or 3d6)',
        'c_ap_desc' => 'If the beholder hits, roll 1d6 for the effect.
            <ol>
            <li>Firebolt (take 1 damage; any heroes next to the hero on fire must roll 1d20. On 10 or higher, they also take 1 point fire damage).
            <li>Chains of Ice (hero can’t move next turn).
            <li>Windchasm (hero is pulled 2 squares to monster).
            <li>Shockwave (hero is pushed 2 squared from monster).
            <li>Lightning bolt (hero loses attack bonus next turn).
            <li>The Evil Eye (beholder switches places with the hero).
            </ol>',
        'c_ranged' => ' The beholder\'s eyestalk rays can hit any hero within 6 squares of it, within line of sight.',
        'c_special' => 'Multiple Eyes',
        'c_special_desc' => 'Every turn, the beholder can attack twice with its eyestalk rays.',
        'c_critical' => false,
        'c_intro' => false
    ),


);

?>