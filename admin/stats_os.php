<?php

// Copyright FunCepts
// Created by Mitesh Modi
// Last Modification => 03.01.15
// Version 3.0.6

include 'header.php';
include CORE.'Statistics.php';

access_admin();

$stats = new Languages('stats');

$os_platform = stats_os();

include SK_VIEW.FILE;

include 'footer.php';

?>