<?PHP
require 'vendor/autoload.php';
$app = new \atk4\ui\App('SnowwA!');
$app->initLayout("Centered");

$msg=$app->add(['Message','Заходи, добрый человек гостем будешь!', 'type'=>'succes','icon'=>'loading loud download']);
