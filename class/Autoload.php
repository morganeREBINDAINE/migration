<?php
class Autoload
{
  private static $instance;

  public static function start() {
    if(empty(self::$instance)) {
      self::$instance = new Autoload();
    }
    return self::$instance;
  }

  private function __construct() {
    spl_autoload_register(array(__CLASS__, 'autoload'));
  }

  public function autoload($class) {
    if(file_exists(ROOT.'/model//'.$class.'.php')) {
      include(ROOT.'/model//'.$class.'.php');
    }
    elseif(file_exists(ROOT.'/entity//'.$class.'.php')) {
      include(ROOT.'/entity//'.$class.'.php');
    }
    elseif(file_exists(ROOT.'/controller//'.$class.'.php')){
      include(ROOT.'/controller//'.$class.'.php');
    }
    elseif(file_exists(ROOT.'/class//'.$class.'.php')){
      include(ROOT.'/class//'.$class.'.php');
    }
    else {
      echo 'cette classe n\'a pas été trouvée';
    }
  }
}
