<?php
require 'lib/phpQuery.php';
//Подключение БД
$link = mysqli_connect('app-lab.loc', 'root', '', 'products');


$url = '';
$file = file_get_contents($url);

$doc = phpQuery::newDocument($file);

$products = [];
foreach ($doc ->find ('.product ') as $product) {
	$product = pq($product);
	$product->find('.price')->prepend('Цена: ');

	$img =  $product->find('.pic img')->attr('src');
	$title = $product->find('.name span:eq(0) a:eq(0)')->text();
	$text = $product->find('.name span:eq(0) small:eq(0)')->text();
	$price = $product->find('.price')->text();
    
    
	//echo $product;
	// echo $img . '<br>';
	// echo '<b>'. $title  .'</b>';
	// echo '<p>'. $text .'</p>';
	// echo '<p>'. $price .'</p>';
	// echo '<hr>';


	$link->query ("INSERT INTO `` (`title`, `text`, `price`, `img`) VALUES ('$title', '$text', '$price', '$img') ") ;

}

?>