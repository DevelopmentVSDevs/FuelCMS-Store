<h1>Shop</h1>

<div class="breadcrumbs">
	<?=$breadcrumb?>
</div>


<pre>
<? print_r($catalog); ?>
</pre>


<? foreach($catalog as $item) : ?>

	<h3><a href="<?=base_url()?>shop/catalog/<?=$item['id']?>"><?=$item['catalog_name']?></a></h3>
	<p><?=$item['catalog_description']?></p>

<? endforeach; ?>