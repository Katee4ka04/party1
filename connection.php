<?PHP
require 'vendor/autoload.php';
session_start();
$db = new \atk4\data\Persistence_SQL('mysql:dbname=heroku_35a63eb77fee245;host=eu-mm-auto-fra-02-c.cleardb.net','bfa11752c77b7d','77c43c35');
//$db = new \atk4\data\Persistence_SQL
class Friends extends \atk4\data\Model {
  public $table = 'Anna';
  function init () {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
  $this->addField('phone_number');
   $this->addField('age');
 }
}
