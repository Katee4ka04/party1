<?PHP
require 'app.php';

$app = new App('public');
$_SESSION['nick'] = 'Artik292';
$_SESSION['nick'] = 'katee4ka04';

$form=$app->layout->add('Form');
$form->setModel(new Friends($db));
$form->onSubmit(function ($form) {
  if($form->model['age']>13){
      $form->model->save();
    /*  $notifier = new \atk4\ui\jsNotify();
  $notifier->setColor('blue');
    $notifier->setPosition('center');
    $notifier->setWidth(50)

               ->setContent('Text')
               ->setTransition('faded')
               ->setIcon('book');
      return $notifier; */
      return new \atk4\ui\jsExpression('document.location= "success.php" ');
  }else{
  //  return $form->error('age','Иди в дочки матери играй!');
  return new \atk4\ui\jsExpression('document.location= "error.php" ');

}
});

$grid = $app->layout->add('Grid');
$grid->setModel(new Friends($db));
$grid->addQuickSearch(['name','surname','phone_number','age']);

$button22222=$app->add(['Button','ADMIN','big teal','icon'=>'spy'])->link(['check']);

/*
$menu=$app->add('Menu');
$tabs=$app->add('Tabs');

$clothes=$menu->addMenu('Clothes');
$clothes->addClass('blue');


$toys=$menu->addMenu('Toys');
$toys->addClass('teal');

$electronics=$menu->addMenu('Electronics');
$electronics->addClass('purple');


$clothes->addItem('Shirts','https://www.dhresource.com/albu_302740708_00-1.0x0/long-sleeve-plaid-shirts-for-men-turn-down.jpg');
$clothes->addItem('Hoodies','http://i.ebayimg.com/images/i/281912640312-0-1/s-l1000.jpg');
$clothes->addItem('Jeans','http://www.everytimefashion.com/images/1/Jeans-Modern.jpg');
$clothes->addItem('Shoes','http://h3group.ca/wpfiles/wp-content/uploads/2016/04/kid-LED-shoes-SILVER-model-1-K7L9.jpg');
$clothes->addItem('Caps','https://sc02.alicdn.com/kf/HTB1KSBSKVXXXXcbXpXXq6xXFXXXe/Custom-sublimation-blank-trucker-cap.jpg');
$clothes->addItem('Socks','https://images-na.ssl-images-amazon.com/images/I/61KHxR02e6L._SL1005_.jpg');

$toys->addItem('Lego','http://englishbookgeorgia.com/blogebg/wp-content/uploads/2015/01/Lego.jpg');
$toys->addItem('Dolls','https://i.pinimg.com/736x/40/3d/dd/403ddd434828cdea7d1b516371d398e3--anime-dolls-bjd-dolls.jpg');
$toys->addItem('Teddy toys','https://www.dhresource.com/0x0s/f2-albu-g1-M00-B6-45-rBVaGVZdFHCACn94AAFKNT-j3uc089.jpg/teddy-bears-plush-toys-gifts-stuffed-plush.jpg');
$toys->addItem('Transformers','https://images-na.ssl-images-amazon.com/images/I/81PoVVc04-L._SY355_.jpg');
$toys->addItem('Cars','https://images-na.ssl-images-amazon.com/images/M/MV5BMTg5NzY0MzA2MV5BMl5BanBnXkFtZTYwNDc3NTc2._V1_UY1200_CR90,0,630,1200_AL_.jpg');

$electronics->addItem('Phones','https://cdn.pocket-lint.com/r/s/1200x/assets/images/120309-phones-buyer-s-guide-best-smartphones-image1-cnxvifjlms.jpg');
$electronics->addItem('Tabs','https://keddr.com/wp-content/uploads/2014/05/a495652f89a266e1c964aeee80f8d726.jpg');
$electronics->addItem('Computers','http://aropa.co.uk/wp-content/uploads/2016/08/hd-wallpaper-computer-hdv1.jpg');
$electronics->addItem('Cases','https://www.dhresource.com/0x0s/f2-albu-g5-M01-24-F0-rBVaI1j9qNSAGu_OAAEGnIPvUr4725.jpg/for-samsung-s7edge-phone-cases-surface-screen.jpg');
$electronics->addItem('Mouses','https://images-na.ssl-images-amazon.com/images/I/817L8yUzMgL._SL1500_.jpg');
$electronics->addItem('USB','https://mochieng.files.wordpress.com/2013/09/usb-stick-1280px-922px0.jpg');

$home=$tabs->addTab('Home');
$candy=$tabs->addTab('Candy');
$furniture=$tabs->addTab('furniture');
$food=$tabs->addTab('food');


$image1=$candy->add(['Image','http://thumbs.ebaystatic.com/images/g/dF8AAOSw9r1V-GSd/s-l225.jpg']);
$image2=$candy->add(['Image','http://i.ebayimg.com/images/i/321241185876-0-1/s-l1000.jpg']);
$image3=$candy->add(['Image','http://latfood.co.il/images/konfeti_na_razves/trufel.jpg']);
$image4=$candy->add(['Image','http://www.laima.lv/wp-content/uploads/2016/05/4750001819939_V-VER-TE-piena-okol-de-100g12.jpg']);

$image5=$furniture->add(['Image','http://cdn.home-designing.com/wp-content/uploads/2009/07/living-room-ikea.jpg']);
$image6=$furniture->add(['Image','https://www.digsdigs.com/photos/ikea-living-room-design-ideas-2012-1.jpg']);
$image7=$furniture->add(['Image','http://www.ikea.com/ms/flash/rooms_ideas/planner_pax3d/content/fallback/planner_fallback.jpg']);
$image8=$furniture->add(['Image','http://www.ikea.com/ms/en_US/media/Bedroom/hemnes_day_bed.jpg']);

$image9=$food->add(['Image','http://g4.delphi.lv/images/pix/659x380/88LGQTJYj-g/salami-pica-ediens-italija-48090665.jpg']);
$image10=$food->add(['Image','https://www.redrobin.com/content/dam/web/menu/tavern-menu/tavern-double-burger-1100.jpg']);
$image11=$food->add(['Image','http://food.fnr.sndimg.com/content/dam/images/food/fullset/2013/9/23/0/BX0907H_haydens-chocolate-cake-recipe_s4x3.jpg.rend.hgtvcom.616.462.suffix/1383787100380.jpeg']);
$image12=$food->add(['Image','http://суши-магадан.рф/files/maki-sushi.png']);

$image333=$home->add(['Image','https://cs2.livemaster.ru/storage/ab/0f/63832edf7ab03f4c1e04f6c2a124--dlya-doma-i-interera-tablichka-derevyannaya-dobro-pozhalovat.jpg']);
*/
