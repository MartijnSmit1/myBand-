<?php
$result2 = $mysqli->query("SELECT * FROM wedstrijden ORDER BY 'titel'");


$result2 = convertResultToArray($result2);


