
<div class="content_text_right">
	<ul class="img_col">
		<li><img src="<?=base_url()?>assets/images/srr-image-8.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/srr-image-7.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/srr-image-5.jpg"></li>
	</ul>
</div>

<div class="content_text_left">

	<h1 class="star">Let's golf!</h1>

	<h3>Monday - Friday, All day<br/>Saturday, Sunday & Holidays, after 2:00 PM</h3>

	<? $rates = fuel_model('rates'); ?>

	<? $rates = $this->load->model('rates_model'); ?>

	<? if (!empty($rates)) : ?>
	<div class="rate_container">
		<h3>Golf</h3>
		<ul>
			<? foreach( $rates->get_items('golf') as $rate ) : ?>
			<li><?=ucfirst(preg_replace("/_/", " ", $rate['item']))?>: <?=$rate['rate']?></li>
			<? endforeach; ?>
		</ul>
	</div>
	<? endif; ?>

	<? if (!empty($rates)) : ?>
	<div class="rate_container">
		<h3>Driving range</h3>
		<ul>
			<? foreach( $rates->get_items('range') as $rate ) : ?>
			<li><?=ucfirst(preg_replace("/_/", " ", $rate['item']))?>: <?=$rate['rate']?></li>
			<? endforeach; ?>
		</ul>
	</div>
	<? endif; ?>

	<? if (!empty($rates)) : ?>
	<div class="rate_container">
		<h3>Golf cart rates</h3>
		<ul>
			<? foreach( $rates->get_items('cart_golf') as $rate ) : ?>
			<li><?=ucfirst(preg_replace("/_/", " ", $rate['item']))?>: <?=$rate['rate']?></li>
			<? endforeach; ?>
		</ul>
	</div>
	<? endif; ?>


</div>

<div class="clear"></div>
