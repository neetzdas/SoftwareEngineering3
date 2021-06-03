<?php
  $animalsB = $birds_tb->findAll();
  $cri=[
    'animalsB'=>$animalsB
  ];

    $title = "Claybrook Zoo";
    $content = loadTemplate("../views/frontend/allBirds.php", $cri) ?>


