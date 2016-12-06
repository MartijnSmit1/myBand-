<?php
//error_reporting(E_ALL);
session_start();
// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/fcties.php';

$templateParser->assign('title', $_GET['action']);


$templateParser->display('head.tpl');
if($_SESSION['logged'] == 1){
    $templateParser->display('header2.tpl');
}else{
    $templateParser->display('header.tpl');
}

$action = isset($_GET['action'])?$_GET['action']:'home';




switch($action){
    case 'home':
        $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:'1';

        include('model/select_home.php');
        $templateParser->assign('result3', $result3);
        $templateParser->display('home.tpl');
        break;

    case 'about':
        include('model/select_about.php');
        $templateParser->assign('result', $result);
        $templateParser->display('about.tpl');
        break;
    case 'schema':
        include('model/select_schema.php');
        $templateParser->assign('result2', $result2);
        $templateParser->display('schema.tpl');
        break;
    case 'contact':
        $templateParser->display('contact.tpl');
        break;
    case  'search':
        include('model/search.php');
        $templateParser->display('search.tpl');
        break;
    case 'admin':
        if($_SESSION['logged'] == 1){
            $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:'1';
            include('model/select_home.php');
            include('model/select_about.php');
            include('model/select_schema.php');
            include('model/admin.php');
            $templateParser->assign('result', $result);
            $templateParser->assign('result2', $result2);
            $templateParser->assign('result3', $result3);
            $templateParser->assign('resultHA', $resultHA);
            $templateParser->display('admin.tpl');
        }else {
            include('model/login.php');
            $templateParser->display('login.tpl');
        }
        break;
};
$templateParser->display('footer.tpl');
