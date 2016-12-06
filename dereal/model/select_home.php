<?php
$start_item = (($page_nr-1) * ITEMS_PER_PAGE);
//$start_item = ITEMS_PER_PAGE * $page_nr - ITEMS_PER_PAGE;

//$page_nr = current page
//ITEMS_PER_PAGE = 2;

$sql = "SELECT * FROM home ORDER BY YEAR(datum) DESC, MONTH(datum) DESC, DAY(datum) DESC LIMIT  " . $start_item . ", " . ITEMS_PER_PAGE;
$result3 = $mysqli->query($sql);
//var_dump(mysqli_error($mysqli));
//$result = $mysqli->query("SELECT * FROM newsarticles");

$total_nr_articles = $mysqli->query("SELECT * FROM home ")->num_rows;
//echo $total_nr_articles;
$total_nr_articles = ceil($total_nr_articles / ITEMS_PER_PAGE);

$templateParser->assign('total_nr_articles', $total_nr_articles);


$result3 = convertResultToArray($result3);


$resultHA = $mysqli->query("SELECT * FROM home");

$resultHA = convertResultToArray($resultHA);
