<?PHP

require 'connection.php';
$app = new \atk4\ui\App('АДминка');
$app->initLayout("Centered");

$check = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));
$check->addField('password',['type'=>'password','required'=>TRUE]);

$form = $app->layout->add('Form');
$form->setModel($check);

$pass = 'anko3';

$form->onSubmit(function($form) use($pass) {
  $_SESSION['password']=$form->model['password'];
  If($form->model['password']==$pass) {
  $_SESSION['hach']='anko3';
  return new \atk4\ui\jsExpression('document.location = "admin.php"');
} else {
  return new \atk4\ui\jsExpression('document.location = "index.php"');
}


});
