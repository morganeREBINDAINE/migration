<?php
/**
 * Crée les routes, trouve controleur
 */
class Routeur
{
  protected $request;
  protected $params;
  protected $routes = ['home' => ['controller' => 'home', 'method' => 'show'],
                       'delete' => ['controller' => 'home', 'method' => 'delete'],
                       'ajout' => ['controller' => 'home', 'method' => 'ajout'],
                       'create' => ['controller' => 'home', 'method' => 'create'],
                       'contact' => ['controller' => 'home', 'method' => 'contact']
                     ];

  public function __construct($req) {
    $params= array();

    //variables post
    if($_POST) {
      $params['$_POST'] = $_POST;
    }

    // variables url
    $values = explode('/',$req);
    $this->request = $values[0];
    unset($values[0]);
    foreach($values as $value) {
      $tri= explode('-', $value);
      $params[$tri[0]] = $tri[1];
    }
    $this->params = $params;
  }

  public function renderController() {
    if(key_exists($this->request, $this->routes)) {
      $controller = ucfirst($this->routes[$this->request]['controller']);
      $method=$this->routes[$this->request]['method'];
      $controller = new $controller($this->params);
      $controller->$method();
    }
    else {
      echo '404';
    }
  }
}
