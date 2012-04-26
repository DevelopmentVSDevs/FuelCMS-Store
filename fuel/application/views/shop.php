<div class="content">
        
	<div class="page-header">
		<h1>Shop</h1>
	</div>

	<div class="breadcrumbs">
		<?=$breadcrumb?>
	</div>

	<div class="row">

	
		<div class="span10">
		
			<? if( $store ): ?>
            <? foreach($store->catalog as $catalog): ?>
                <?='Catalog: ' . $catalog->name?> 
                <? echo "<br>" ?>
                <? foreach($catalog->category as $category): ?>
                    <?='Category: ' . $category->name?>  
                    <? echo "<br>" ?>
                    <? if(isset($category->product)): ?>
                        <? foreach($category->product as $product): ?>
                            <?='Product: ' . $product->name?>  
                            <? echo "<br>" ?>
                        <? endforeach ?>
                    <? endif ?>
                <? endforeach ?>
            <? endforeach ?>
			<? endif; ?>


		</div>


		<div class="span4">
			<h3>Secondary content</h3>
		</div>

	</div>

</div>
