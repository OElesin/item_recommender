<?php

require_once("recommend.php");
require_once("sample_list.php");


$re = new Recommend();
echo "<pre>";
print_r($re->getRecommendations($books, "bruce"));
echo "</pre>";
?>