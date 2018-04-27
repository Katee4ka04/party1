<?PHP
require 'conection.php';

$app = new \atk4\ui\App('SnowwA!');
$app->initLayout("Centered");

$_SESSION['nick'] = 'Artik292';
$_SESSION['nick'] = 'katee4ka04';


/*
$form=$app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function ($form) {
  if($form->model['age']>13){
      $form->model->save();
      return $form->success('Record uptated');
  }else{
  //  return $form->error('age','Иди в дочки матери играй!');
  return new \atk4\ui\jsExpression('document.location= "error.php" ');
  }
*/

  $form->onSubmit(function ($form) {
    $notifier = new \atk4\ui\jsNotify();
$notifier->setColor('blue');
  $notifier->setPosition9('center');
  $notifier->setWidth(50)
 
             ->setContent('Text')
             ->setTransition('faded')
             ->setIcon('book');
});

/*
$grid = $app->layout->add(['Grid']);
$grid->setModel(new Friends($db));
$grid->addQuickSearch(['name','surname','phone_number','age']);

$button22222=$app->add(['Button','ADMIN','big teal','icon'=>'spy'])->link(['check']);
*/