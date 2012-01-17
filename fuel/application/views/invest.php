
<div class="content_text_right">
	<ul class="img_col">
		<li><img src="<?=base_url()?>assets/images/srr-image-5.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/srr-image-6.jpg"></li>
	</ul>
</div>

<div class="content_text_left">

	<h1 class="star" style="font-size: 2em;">Invest in your future!</h1>


	<? $invest = fuel_model('invest'); ?>

	<? $invest = $this->load->model('invest_model'); ?>

	<? if (!empty($invest)) : ?>

	<? foreach( $invest->list_items() as $invest ) : ?>
	<div><?=$invest['content']?></div>
	<? endforeach; ?>

	<? endif; ?>

</div>

<div class="clear"></div>
