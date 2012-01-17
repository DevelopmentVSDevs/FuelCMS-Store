
<div class="content_text_right">
	<ul class="img_col">
		<li><img src="<?=base_url()?>assets/images/srr-image-10.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/srr-image-5.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/srr-image-4.jpg"></li>
		<li><img src="<?=base_url()?>assets/images/srr-image-7.jpg"></li>
	</ul>
</div>

<div class="content_text">

	<h1 class="star">About the Resort</h1>

	<? $about = fuel_model('about', array('find' => 'all')) ?>

	<? if (!empty($about)) : ?>

		<? foreach( $about as $s ) : ?>

			<?=$s['content']?>

		<? endforeach; ?>

	<? endif; ?>

	<h1 class="star">Map</h1>
	<p style="margin: 20px 0px">
	1205 N. Country Club Drive <br/>
	Deer Park, WA 99006
	</p>

	<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1205A+N.+Country+Club+Drive+Deer+Park,+WA+++99006+&amp;aq=&amp;sll=47.65454,-122.346341&amp;sspn=0.008499,0.016093&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=1205+N+Country+Club+Dr,+Deer+Park,+Washington+99006&amp;t=m&amp;ll=47.591346,-119.904785&amp;spn=5.186882,9.338379&amp;z=6&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=1205A+N.+Country+Club+Drive+Deer+Park,+WA+++99006+&amp;aq=&amp;sll=47.65454,-122.346341&amp;sspn=0.008499,0.016093&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=1205+N+Country+Club+Dr,+Deer+Park,+Washington+99006&amp;t=m&amp;ll=47.591346,-119.904785&amp;spn=5.186882,9.338379&amp;z=6" style="color:#0000FF;text-align:left">View Larger Map</a></small>

</div>

<div class="clear"></div>
