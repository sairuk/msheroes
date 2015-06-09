<?php
/*
* Monster Slayers - Hereos of Hesiod Character Data
* 
* V:2050608
*/

$chars = array(
    'jorick' => array(
        'c_img' => false,
        'c_title' => 'Jorick',
        'c_type' => 'Human Fighter',
        'c_num' => 3,
        'c_ac' => 13,
        'c_hp' => 5,
        'c_speed' => '5',
        'c_speed_desc' => false,
        'c_ap' => 'Greatsword Cleave 1d20 + 4 (or 3d6+1)',
        'c_ap_desc' => 'Deals 1 point of greatsword damage.',
        'c_ranged' => false,
        'c_special' => 'Charge',
        'c_special_desc' => 'If you are not next to a monster at the start of your turn, and there is a monster within 7 squares of you, move up to it and attack (+2 bonus to your attack power roll).',
        'c_critical' => 'On a roll of a natural 20 (or three sixes), roll 1d6 for the amount of damage you do.',
        'c_intro' => false
    ),
    'evindol' => array(
        'c_img' => false,
        'c_title' => 'Evindol',
        'c_type' => 'Human Rogue',
        'c_num' => 1,
        'c_ac' => 11,
        'c_hp' => 3,
        'c_speed' => 6,
        'c_speed_desc' => false,
        'c_ap' => 'Whirling Blades 1d20 + 6 (or 3d6+3)',
        'c_ap_desc' => 'Deals 1 point of dagger damage.',
        'c_ranged' => false,
        'c_special' => 'Sneak Attack',
        'c_special_desc' => 'If you and a friend stand on the exact opposite sides of an enemy, your attacks do 2 points of dagger damage instead of 1 point of dagger damage.',
        'c_critical' => 'On a roll of a natural 20 (or three sixes), roll 1d6 for the amount of damage you do.',
        'c_intro' => false
    ),
    'raen' => array(
        'c_img' => false,
        'c_title' => 'Raen "Swordbreaker" Grommel',
        'c_type' => 'Human Rogue',
        'c_num' => 2,
        'c_ac' => 9,
        'c_hp' => 7,
        'c_speed' => 5,
        'c_speed_desc' => false,
        'c_ap' => 'Massive Axe 1d20 + 5 (or 3d6+2)',
        'c_ap_desc' => 'Deals 1 point of axe damage.',
        'c_ranged' => false,
        'c_special' => 'Ferocious Warrior',
        'c_special_desc' => 'Whenever you are hit, you can shove the monster that hit you up to 2 squares away from you, in any direction.',
        'c_critical' => 'On a roll of a natural 20 (or three sixes), roll 1d6 for the amount of damage you do.',
        'c_intro' => false
    ),
    'yarrow' => array(
        'c_img' => false,
        'c_title' => 'Yarrow Marshwalker',
        'c_type' => 'Half-Orc Shaman',
        'c_num' => 4,
        'c_ac' => 10,
        'c_hp' => 6,
        'c_speed' => 5,
        'c_speed_desc' => false,
        'c_ap' => 'Vengeful Spirits 1d20 + 3 (or 3d6)',
        'c_ap_desc' => 'Deals 1 point of spirit damage.',
        'c_ranged' => false,
        'c_special' => 'Spectral Shackles',
        'c_special_desc' => 'If your first attack misses, roll a d20. If you roll an 11 or above, ghostly chains tied your enemy to the ground, and the enemy cannot move on its next turn. (Or, roll 1d6. A 4 or higher succeeds in creating the shackles.)',
        'c_critical' => 'On a roll of a natural 20 (or three sixes), roll 1d6 for the amount of damage you do.',
        'c_intro' => false
    ),
    'bet' => array(
        'c_img' => false,
        'c_title' => 'Betilivatis "Bet"',
        'c_type' => 'Elf Wizard',
        'c_num' => 5,
        'c_ac' => 7,
        'c_hp' => 4,
        'c_speed' => 4,
        'c_speed_desc' => false,
        'c_ap' => 'Fireball 1d20 + 7 (or 3d6 +4)',
        'c_ap_desc' => 'Deals 1 point of fire damage.',
        'c_ranged' => ' You can hit any creature within 6 squares of you, within line of sight',
        'c_special' => 'Blastwave',
        'c_special_desc' => 'If you hit with your first attack, roll a d20 for each monster standing next to the monster you hit. If you roll a 10 or above, you deal 1 point of fire damage to that monster as well. (Or, roll 1d6. A 4 or higher succeeds in hitting each monster.)',
        'c_critical' => 'On a roll of a natural 20 (or three sixes), roll 1d6 for the amount of damage you do.',
        'c_intro' => false
    ),
);

?>