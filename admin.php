<?PHP

require 'conection.php';
require 'app.php';
$app = new App('admin');
$app->initLayout("Centered");

$label=$app->add(['Label',$_SESSION['nick']]);

$crud = $app->layout->add('CRUD');
$crud->setModel(new Friends($db));
