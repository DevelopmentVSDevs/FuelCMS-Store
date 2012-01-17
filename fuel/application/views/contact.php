

<div class="content_text_right">

	<div class="map" style="float: right; width: 500px; margin-top: 60px; text-align: center">

		<? if( isset($success_message)) : ?>
			<h2><?=$success_message?></h2>
		<? else : ?>

		<form action="<?=base_url()?>index.php/contact" method="POST" name="contact_us">


			<ul>
				<li>
					<label>Your Name</label>
					<input type="text" name="contactName" class="name" value="<?=isset($contactName) ? $contactName : ''?>">
				</li>
				<li>
					<label>Email Address</label>
					<input type="text" name="contactEmail" class="name" value="<?=isset($contactEmail) ? $contactEmail : ''?>">
				</li>
				<li>
					<label>Message</label>
					<textarea name="contactComments"><?=isset($contactComments) ? $contactComments : ''?></textarea>
				</li>
			</ul>

			<div>
				<? if( isset($error_message)) : ?>
					<h4 style="color: red; margin: 0 auto; text-shadow: none;"><?=$error_message?></h4>
				<? endif; ?>
			</div>
			<div style="padding-left: 120px; margin-bottom: 20px;">

				<?= form_error('recaptcha_response_field') ?>
				<? $this->load->view('recaptcha')?>

			</div>

			<div style="text-align: center;">
				<input type="submit" name="submitContact" value="Submit">
			</div>

		</form>

		<? endif; ?>

		<div class="clear"></div>
	</div>


</div>


<div class="content_text">

	<h1 class="star">Contact us</h1>

	<p style="width: 430px;">Please complete the following contact form to obtain more details & information about Spokane RV Resort. We do our best to respond in less than 24 hours. 
	</p>

	<br/><br/>

	<h3>By Mail</h3>
	<p>1205A N. Country Club Drive<br/>Deer Park, WA 99006</p>

	<h3>By Phone</h3>
	<p>
		Phone: (877) 276-1555<br/>Email:  <a href="mailto:info@spokanervresort.com">info@spokanervresort.com</a>
 	</p>

	<div style="clear: both;"></div>
</div>
