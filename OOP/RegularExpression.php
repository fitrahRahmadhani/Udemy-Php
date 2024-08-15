<?php

$result = (bool)preg_match_all("/Rahma/i", "Fitrah Rahmadhani", $matches);
var_dump($result);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing dan bangsat");
var_dump($result);

$result = preg_split("/[\s,-]/", "Rahma Fitrah, programmer - larapel", -1, PREG_SPLIT_NO_EMPTY);
var_dump($result);
