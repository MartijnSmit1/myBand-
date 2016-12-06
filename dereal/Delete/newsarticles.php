<?php

echo '<section>';

//fetch_assoc should not be in the view!
foreach($result as $newsItem => $oneItem){

	echo '<article>';
	echo '<h1>'.$oneItem['title'].'</h1>';
	echo '<content>'.$oneItem['content'].'</content>';
	echo '<br><img style="width: 300px;" src="images/' . $oneItem['image'] . '">';
	echo '<p>'. $oneItem['date_created']. '</p>';
	echo '</article>';
}

echo '</section>';