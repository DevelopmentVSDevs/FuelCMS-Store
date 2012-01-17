<?php $this->load->view('_blocks/header')?>

	<?php /* RIGHT SIDE WITH SIDE MENU AND BLCOKS */ ?>
	<?php if (!empty($blocks) OR !empty($sidemenu)) : ?>

	<?php endif; ?>

	<div id="main-inner">
		<?php echo fuel_var('body', ''); ?>
	</div>
	
<?php $this->load->view('_blocks/footer')?>
