
<div id="right-inner">
	
	<img class="pic" src="<?=base_url()?>assets/images/srr-image-11.jpg"/>

	<div style="height: 40px;"></div>

	<h1 class="star">About Us</h1>

<p>Right here in Deer Park you can enjoy a lifestyle that is in true harmony with nature’s beauty: a 5 Star RV Resort catering to big rigs and family camping; elegant homes in a golf course environment; a challenging excellently landscaped 18 hole golf course; and a grill and sports bar.  You need go no further to enjoy the lifestyle a person dreams about.  All of this surrounded by a breathtaking panorama of mountains, lakes and rivers.</p>
 
    <p>Spokane RV Resort boasts a <strong><a href="http://www.woodalls.com/campground/campgrounddetails.aspx?campgroundid=40153924&index=0&type=PlacesToCamp&subtype=RVCamping" target="_blank">Woodall's 5 Star Rating</a></strong>, as well as excellence awards from several Recreational Camping and RV organizations.  A camper can enjoy one of the very spacious RV paved sites with full hookups, including <strong>50 amp service</strong>, <strong>WiFi and cable television</strong> with over <strong>60 channels</strong>, all for one flat rate <strong><em>without surcharges</em></strong>!  A spacious <strong>family pavilion</strong> is available for camper functions.  A large exercise <strong>heated swimming pool</strong> and refreshing <strong>hot tub</strong> are also available for RV client enjoyment. Campers will also find very spacious and convenient <strong>bathroom and shower facilities</strong>, as well as a laundromat with 8 washers and dryers.  We have provided two <strong>dog runs</strong> for our customers with pets, plus there is ample pick-up-as-you-go space to walk your dogs.  There is also a <strong>9 hole miniature putting course</strong> in the park.</p>
	<br/> 
	<h2><a href="/about">And much more &rarr;</a></h2>

</div>

<div id="left-inner">

	<h1 style="margin-bottom: 10px;">WELCOME</h1>
	<h3>to the best that RV parks have to offer!</h3>

	<p style="margin: 10px 0px 20px">
	We welcome you to our outdoor community, surrounded by a rolling 18 hole golf course, fresh air, views of the nearby mountains, gorgeous sunsets and a quiet ambiance, all of which will inspire you to settle down and live the good life with us!
	</p>
	

	<div class="woodalls-five-star-rating">
		<img src="<?=base_url()?>assets/images/woodalls-five-star-rating.png"/><br/>
		<a href="http://www.woodalls.com/campground/campgrounddetails.aspx?campgroundid=40153924&index=0&type=PlacesToCamp&subtype=RVCamping" target="_blank">Woodall's 5 Star Rating</a>
	</div>

	<div class="inner-box"><div class="inner-box-content">
			
		<? $home = fuel_model('home') ?>

		<? if (count($home)) : ?>
			<? foreach($home as $content) : ?>
				<?=$content['content'];?>
			<? endforeach;?>
		<? else : ?>
			Default content!
		<? endif; ?>			

	</div></div>

</div>

<div class="clear"></div>