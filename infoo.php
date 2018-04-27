<?PHP
require 'vendor/autoload.php';
$app = new \atk4\ui\App('SnowwA!');
$app->initLayout("Centered");

$msg=$app->add(['Message','Инфрмация: бла, бла, бла, бла... БЛА!', 'type'=>'info','icon'=>'loading alk outline']);
