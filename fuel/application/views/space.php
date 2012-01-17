<div class="content_text_right">
        <ul class="img_col">
                <li><img src="<?=base_url()?>assets/images/sv-image5.jpg"></li>
                <li><img src="<?=base_url()?>assets/images/sv-image6.jpg"></li>
        </ul>
</div>

<div class="content_text_left">

	<? $obj = fuel_model('space', array('find' => 'all')) ?>

	<? if (!empty($obj)) : ?>

		<? foreach( $obj as $s ) : ?>

			<?=$s['content']?>

		<? endforeach; ?>

	<? endif; ?>

</div>

<div class="clear"></div>
