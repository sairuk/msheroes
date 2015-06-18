<?php

$canonical="http://msheroes.mameau.com/";
$image="http://msheroes.mameau.com/img/logo.png";

$name="Monster Slayers";
$description="An unofficial browser based implementation of Monster Slayers - The Heroes of Hesiod from Wizards of the Coast.";
$keywords="wizard, dungeon, dragon, wotc, coast, dnd, tabletop, roll20, rogue, thief, rpg, roleplay, dice";

$author="sairuk";

$google_plus="113462917042894028038";
$twitter="113462917042894028038";

?>

  <!-- properties -->
  <meta name="viewport" content="width-device-width,initial-scale=1"/>
  <meta name="robots" content="index, nofollow">
  <link rel="canonical" href="<?=$canonical?>" />

  <!--social/analytics tags -->
  <meta http-equiv="Content-type" content="text/html;charset=utf-8" />
  <meta name="description" content="<?=$description?>"/>
  <meta name="keywords" content="<?=$keywords?>">
  <meta name="author" content="<?=$author?>"/>


  <!-- Google Authorship and Publisher Markup -->
  <link rel="author" href="https://plus.google.com/<?=$google_plus?>/posts"/>
  <link rel="publisher" href="https://plus.google.com/<?=$google_plus?>"/>


  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="<?=$name?>">
  <meta itemprop="description" content="<?=$description?>">
  <meta itemprop="image" content="<?=$image?>"> 

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="<?=$canonical?>">
  <meta name="twitter:title" content="<?=$name?>">
  <meta name="twitter:description" content="<?=$description?>">
  <meta name="twitter:creator" content="<?=$twitter?>">
  <!-- Twitter Summary card images must be at least 200x200px -->
  <meta name="twitter:image" content="<?=$image?>"> 

  <!-- Open Graph data -->
  <meta property="og:title" content="<?=$name?>" />
  <meta property="og:description" content="<?=$description?>" /> 
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?=$canonical?>" />
  <meta property="og:image" content="<?=$image?>" />
  <!-- end social -->
