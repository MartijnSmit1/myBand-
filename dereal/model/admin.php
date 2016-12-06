<?php
include "../includes/config.php";
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL:
    (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//Home upload
if(isset($_POST['uploadH'])){
    $titel = $_POST['titel'];
    $image = $_POST['image'];
    $informatie = $_POST['informatie'];
    $datum = $_POST['datum'];
    $sql = "INSERT INTO home (`titel`,`image`,`informatie`,`datum`) VALUES ('$titel','$image','$informatie','$datum')";
    $result = $mysqli->query($sql);
    header('Location: ../admin');
}

//Home aanpassen
if(isset($_POST['updateH'])){
    $id = $_POST['id'];
    $titel = $_POST['titel'];
    $image = $_POST['image'];
    $informatie = $_POST['informatie'];
    $datum = $_POST['datum'];
    $sql = "UPDATE home SET titel = '" . $titel . "', image = '" . $image . "', informatie = '" . $informatie . "' , datum = '" . $datum . "' WHERE id='$id'";
    $result = $mysqli->query($sql);
    header('Location: ../admin');
} elseif(isset($_POST['updateSAll'])){
// Update all met een for loop
}

//Home delete
if(isset($_POST['deleteH'])) {
    $sql = "DELETE FROM home WHERE id = '" . $_POST['deleteH'] . "'";
    $result = $mysqli->query($sql);
    header('Location: ../admin');

}

//Schema upload
if(isset($_POST['upload'])){
    $titel = $_POST['titel'];
    $prijs = $_POST['prijs'];
    $datum = $_POST['datum'];
    $locatie = $_POST['locatie'];
        $sql = "INSERT INTO wedstrijden (`titel`,`prijs`,`datum`,`locatie`) VALUES ('$titel','$prijs','$datum','$locatie')";
        $result = $mysqli->query($sql);
    header('Location: ../admin');
}

//Schema aanpassen
if(isset($_POST['updateS'])){
    $id = $_POST['id'];
    $titel = $_POST['titel'];
    $prijs = $_POST['prijs'];
    $datum = $_POST['datum'];
    $locatie = $_POST['locatie'];
    $sql = "UPDATE wedstrijden SET titel = '" . $titel . "', prijs = '" . $prijs . "', datum = '" . $datum . "' , locatie = '" . $locatie . "' WHERE id='$id'";
    $result = $mysqli->query($sql);
    header('Location: ../admin');
} elseif(isset($_POST['updateSAll'])){
// Update all met een for loop
}


//Schema delete
if(isset($_POST['deleteS'])) {
    $sql = "DELETE FROM wedstrijden WHERE id = '" . $_POST['deleteS'] . "'";
    $result = $mysqli->query($sql);
    header('Location: ../admin');

}

//Schema About aanpassen
if(isset($_POST['updateA'])){
    $id = $_POST['id'];
    $titel = $_POST['titel'];
    $image = $_POST['image'];
    $informatie = $_POST['informatie'];
    $datum = $_POST['datum'];
    $sql = "UPDATE about SET titel = '" . $titel . "', image = '" . $image . "', informatie = '" . $informatie . "', datum = '" . $datum . "' WHERE id='$id'";
    $result = $mysqli->query($sql);
    header('Location: ../admin');
}


?>



