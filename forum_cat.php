<?php

// Copyright FunCepts
// Created by Mitesh Modi
// Last Modification => 29.10.15
// Version 3.0.5

include 'header.php';

$forum = topics_cat($_GET['id']);
$fofo = new Languages('forum');

include SK_VIEW.FILE;

include 'footer.php';

?>