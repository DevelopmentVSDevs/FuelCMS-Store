
<div class="content_text_right">
	<ul class="img_col">
		<li><img src="<?=base_url()?>assets/images/sv-image1.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/sv-image2.jpg"></li>
	</ul>
</div>

<div class="content_text_left">

	<h1>Upcoming Events!</h1>

	<? $sales = fuel_model('sales', array('find' => 'all')) ?>

	<? if (!empty($sales)) : ?>

		<? foreach( $sales as $sale ) : ?>

			<? if($sale->heading): ?>
				<h3><?=$sale->heading?></h3>
			<? endif; ?>
			<? if($sale->subheading): ?>
				<h4><?=$sale->subheading?></h4>
			<? endif; ?>
			<? if($sale->content): ?>
				<p><?=$sale->content?><p>
			<? endif; ?>
			<? if($sale->date_time != '0000-00-00 00:00:00'): ?>
				<h4>Date/Time: <?=$sale->date_time?></h4>
			<? endif; ?>
			<? if($sale->location): ?>
				<h4>Location: <?=$sale->location?></h4>
			<? endif; ?>

		<? endforeach; ?>

	<? else : ?>
		<p>In addition to Several Estate Sales that are in the works...
We are working on the Grand Opening of the VintageEvent Productions Studios..So Stay Tuned!</p>
		<p>Sign up for a VintageEvent Alert so you don't miss a thing...</p>
	<? endif; ?>

	<br/>
	<p><a class="button" href="<?=base_url()?>index.php/alerts">Sign Up For Alerts!</a></p>

</div>

<div class="clear"></div>
