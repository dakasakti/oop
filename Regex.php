<?php

$matches = [];

$result = (bool)preg_match_all("/john|oe|oh/i", "John Doe 30", $matches);

var_dump($result);
var_dump($matches);

$akhir = preg_replace("/bangsat|anjing/i", "***", "Emang kacau bangsat anjing");
var_dump($akhir);

$split = preg_split("/[\s,-]/i", "Mahmuda Karima - Software Engginer");
var_dump($split);
