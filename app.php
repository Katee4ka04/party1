<?php
require 'connection.php';
class App extends \atk4\ui\App {
  public $db;
  public $sms;
  function __construct($mode) {
    parent::__construct('SnowwA');
    if ($mode == 'public') {
      $this->initlayout('Centered');
      $this->layout->template->del('Header');

      $logo='https://thumbs.dreamstime.com/b/snow-circle-icon-23678167.jpg';

      $this->layout->add([
        'Header',
        '',
        'size'=>'massive',
        'aligned'=>'center'
      ],'Header');

      $this->layout->add(['Image',$logo,'medium centered'], 'Header');

    }elseif($mode == 'admin') {
      $this->initLayout('Admin');
      $this->layout->leftMenu->additem(['Main menu','icon'=>'home'],['index']);
      $this->layout->leftMenu->additem(['Admin','icon'=>'users'],['admin']);
      $this->layout->leftMenu->additem(['User','icon'=>'unordered list'],['user']);
    }
  }
}
