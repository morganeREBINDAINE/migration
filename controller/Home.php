<?php
class Home
{
  protected $params;
  public function __construct($params){
    $this->params = $params;
  }
  public function show() {
    $manager = new DevinettesManager();
    $devinettes = $manager->all();
    $view = new View('home');
    $view->render(compact('devinettes'));
  }

  public function contact() {
    $view = new View('contact');
    $view->render();
  }

  public function create() {
    if(isset($this->params['post'])) {
      $id = (int)$this->params['post'];
      $manager = new DevinettesManager();
      $devinette = $manager->find($id);
    }
    else {
      $devinette = new Devinette();
    }
    $view = new View('form_devinette');
    $view->render(compact('devinette'));
  }

  public function ajout() {
    $datas = $this->params['$_POST'];
    $manager = new DevinettesManager();

    if(isset($datas['id'])){
      $result=$manager->update($datas);
    }
    else {
      $result=$manager->add($datas);
    }
    header("Location:".HOST.'/home');
  }

  public function delete() {
    $id = $this->params['post'];
    $manager = new DevinettesManager();
    $rep=$manager->delete($id);
    header('location:'.HOST.'/home');
  }
}
