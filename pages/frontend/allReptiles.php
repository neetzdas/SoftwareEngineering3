<?php
  $animalsR = $reptiles_tb->findAll();
  $cri=[
    'animalsR'=>$animalsR
  ];

    $title = "Claybrook Zoo";
    $content = loadTemplate("../views/frontend/allReptiles.php", $cri) ?>


