<h1><?=$product['product_name']?></h1>
<? foreach($product as $k => $v) :?>
	<?=$k?>:<?=$v?><br/>
<? endforeach; ?>