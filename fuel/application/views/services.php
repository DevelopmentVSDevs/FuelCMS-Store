<div class="content_text_right">
        <ul class="img_col">
		<li><img src="<?=base_url()?>assets/images/sv-image3.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/sv-image9.jpg"></li>
        <li><img src="<?=base_url()?>assets/images/sv-image4.jpg"></li>
        </ul>
</div>

<div class="content_text_left">

	<? $services = fuel_model('services', array('find' => 'all')) ?>

	<? if (!empty($services)) : ?>

		<? foreach( $services as $s ) : ?>

			<?=$s->content?>

		<? endforeach; ?>

	<? endif; ?>

</div>

<div class="clear"></div>
