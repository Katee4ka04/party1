<?PHP

require 'conection.php';
require 'app.php';
$app = new App('admin');


$label=$app->add(['Label',$_SESSION['nick']]);

$crud = $app->layout->add('CRUD');
$crud->setModel(new Friends($db));
