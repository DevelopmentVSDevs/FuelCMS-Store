
<div class="content_text_right">
	<ul class="img_col">
		<li><img src="<?=base_url()?>assets/images/srr-image-1.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/srr-image-1.jpg"></li>
	</ul>
</div>

<div class="content_text_left">

	<h1 class="star">Upcoming Events!</h1>

	<? $calendar = fuel_model('calendar', array('find' => 'all')) ?>

	<? if (!empty($calendar)) : ?>

		<? foreach( $calendar as $r ) : ?>

			<div class="calendar_record">
				<h1><?=$r['heading']?></h1>
				<h2><?=$r['subheading']?></h2>
				<h3><?=date('D, M d, Y', strtotime($r['date_time']))?></h3>
				<p><?=$r['content']?></p>
			</div>

		<? endforeach;?>

	<? else : ?>
		Sorry, we don't have any upcoming events right now. 
	<? endif; ?>

</div>

<div class="clear"></div>
