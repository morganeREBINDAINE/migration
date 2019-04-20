<?php

class View
{
  protected $viewRequest;

  public function __construct($name) {
    $this->viewRequest = $name;
  }

  public function render($vars=null) {
    if($vars) { extract($vars); }
    ob_start();
    include(ROOT.'/vue/'.$this->viewRequest.'.php');
    $content = ob_get_clean();
    require(ROOT.'/vue/template.php');
  }
}
