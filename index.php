<?php
include_once('_config.php');
include_once(ROOT.'/class/Autoload.php');

Autoload::start();
// include_once(ROOT.'/class/Routeur.php');


$p = $_GET['p'];

$routeur = new Routeur($p);
$routeur->renderController();
