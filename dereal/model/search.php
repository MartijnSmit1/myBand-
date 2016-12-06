<?php
require('config.php');

if(isset($_GET['search'])) {
    $q = '%' .$search. '%';
    $stmt = $dbc->prepare("SELECT titel, prijs FROM wedstrijden WHERE titel LIKE ?");
    $stmt->execute(array($q));
}
if ($num == 0){
    echo "<p>Sorry, no products matched your search</p>";
} else {
    if ($num == 1){
        echo '<p>We have found 1 product that matches your search terms. Please click the link to visit the product page.</p>';
    } else {
        echo '<p>We have found '.$num.' products that match your search terms. Please click a link to visit the product page.</p>';
    }
    echo '<ul class="products>';
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo '<li><h3><a href="product.php?id='.$row['product_id'].'">'.$row['product_name'].'</a></h3></li>';
    }
    echo '</ul>';
}

?>