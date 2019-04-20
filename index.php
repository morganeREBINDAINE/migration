<?php
include_once('_config.php');
include_once(ROOT.'/class/Autoload.php');

<<<<<<< HEAD
// create the action request
if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "home";
}

// create the user session
$username = getUsername();
$role     = getRole();

// firewall page
if( isPublicArea($action) ) {
    if(file_exists($action.'.php')) {
        include($action.'.php');
    } else {
        include('404.php');
    }

} else {

    // page private if authorized
    if (isUserAuthorized($action, $role))
    {
        include($action.'.php');
    } else {
        header('location:index.php?action=login');
        exit;
    }
}



=======
Autoload::start();
// include_once(ROOT.'/class/Routeur.php');


$p = $_GET['p'];

$routeur = new Routeur($p);
$routeur->renderController();
>>>>>>> morgane
