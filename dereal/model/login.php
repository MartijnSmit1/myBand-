<?php
session_start();
if(isset($_POST['login'])){
    $wachtwoord = "test";
if($_POST['wachtwoord'] == $wachtwoord){
    $_SESSION['logged'] = 1;
    header('Location: ../admin');
}else{
    header('Location: ../admin');
};
//    var_dump($_POST['wachtwoord']);
};

?>