<?php
  $animalsF = $fishes_tb->findAll();
  $cri=[
    'animalsF'=>$animalsF
  ];

    $title = "Claybrook Zoo";
     $content = loadTemplate("../views/frontend/allFishes.php", $cri) ?>


