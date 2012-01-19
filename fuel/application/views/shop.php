<h1>Shop</h1>

<div class="breadcrumbs">
	<?=$breadcrumb?>
</div>

<? if( $catalog ) : ?>
	
	<? foreach($catalog as $catalog_name => $item) : ?>

		<h3><a href="<?=base_url()?>shop/<?=strtolower(preg_replace("/ /", "_", $item['catalog_name']))?>"><?=$catalog_name?></a></h3>
		<p><?=$item['catalog_description']?></p>

		<? if( ! empty($item['products'])) : ?>
			<h2>Products</h2>
			<? foreach($item['products'] as $product_name => $product) : ?>
				<?=$product_name?><br/>
			<? endforeach; ?>

		<? endif; ?>

		<? if( ! empty($item['children'])) : ?>

			<? foreach($item['children'] as $child_catalog_name => $child_item) : ?>

				<div class="catalog">

					<h3 class="catalog_name"><?=$child_catalog_name?></h3>

					<? if( $child_item['products']) : ?>

						<? foreach($child_item['products'] as $child_item_product) : ?>
							
							<? $this->load->module_view('store', 'product', array('product' => $child_item_product) ); ?>

						<? endforeach; ?>

					<? endif; ?>

				</div>


			<? endforeach; ?>

		<? endif; ?>

	<? endforeach; ?>

<? endif; ?>
