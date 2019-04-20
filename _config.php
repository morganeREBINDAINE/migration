<?php
/*** configuration *****/
ini_set('display_errors','on');
error_reporting(E_ALL);
<<<<<<< HEAD

// start session
session_start();
include_once ('_bdd.php');
include_once ('_session.php');
include_once ('_security.php');



// constantes
$root = $_SERVER['DOCUMENT_ROOT'];
define('ROOT', $root);

=======
define('ROOT', dirname(__FILE__));
define('HOST', 'http://'.$_SERVER['HTTP_HOST'].'/Devinette-master/Devinette');
>>>>>>> morgane
