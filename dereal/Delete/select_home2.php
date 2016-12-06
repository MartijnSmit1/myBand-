<?php
$start_item = (($page_nr-1) * ITEMS_PER_PAGE);
//$start_item = ITEMS_PER_PAGE * $page_nr - ITEMS_PER_PAGE;

//$page_nr = current page
//ITEMS_PER_PAGE = 2;

$sql = "SELECT * FROM home LIMIT " . $start_item . ";
$result3 = $mysqli->query($sql);
//$result = $mysqli->query("SELECT * FROM newsarticles");

$result3 = convertResultToArray($result3);


