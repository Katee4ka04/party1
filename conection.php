<?PHP
require 'vendor/autoload.php';
session_start();
$db=new \atk4\data\Persistence_SQL('mysql:dbname=fdb;host=localhost','root','');

class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init () {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
  $this->addField('phone_number');
   $this->addField('age');
 }
}
