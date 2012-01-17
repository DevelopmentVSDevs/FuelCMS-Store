<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<?php if (!empty($is_blog)) : ?>
	<title><?php echo $CI->fuel_blog->page_title($page_title, ' : ', 'right')?></title>
	<?php else : ?>
	<title>Seattle Vintage</title>
	<?php endif ?>
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>" />
	<meta name="description" content="<?php echo fuel_var('meta_description')?>" />

	<?php echo css('main'); ?>
	<?php echo css($css); ?>
	
	<?php echo js('jquery, main'); ?>
	<?php echo js($js); ?>
	
	<?php if (!empty($is_blog)) : ?>
	<?php echo $CI->fuel_blog->header()?>
	<?php endif; ?>
	<base href="<?php echo site_url()?>" />

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22809098-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

</head>


<body>


<div id="wrapper">

	<div id="header_wrapper">
		<div id="header">

			<div class="top_right">

				<ul>
					<li>
						<a class="button" href="<?=base_url()?>index.php/alerts">Sign Up For Alerts!</a>
					</li>
					<li style="padding: 25px 0px 0px; text-align: right;">
						<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.antiquesinc.com&amp;layout=standard&amp;show_faces=false&amp;width=200&amp;action=like&amp;font&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:35px;" allowTransparency="true"></iframe>

					</li>
				</ul>

			</div>

			<div class="logo">
				<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/seattle-vintage-logo.png"></a>
			</div>

		</div>


	</div>

	<div id="splash_content_wrapper">

		HI!

	</div>

</div>