<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
	<?php if (!empty($is_blog)) : ?>
	<title><?php echo $CI->fuel_blog->page_title($page_title, ' : ', 'right')?></title>
	<?php else : ?>
	<title>Spokane RV Resort - Deer Park, WA</title>
	<?php endif ?>
	<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	 <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" >

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>" />
	<meta name="description" content="<?php echo fuel_var('meta_description')?>" />

	<?php echo css('main'); ?>
	<?php echo css($css); ?>

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	
	<?php echo js('jquery, main'); ?>
	<?php echo js($js); ?>
	
	<?php if (!empty($is_blog)) : ?>
	<?php echo $CI->fuel_blog->header()?>
	<?php endif; ?>
	<base href="<?php echo site_url()?>" />

</head>


<body>


<div id="wrapper">

	<div id="header_wrapper">
		<div id="header">

			<div class="top_right">

			</div>

			<div class="logo">
				<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/logo.png"></a>
			</div>

		</div>


	</div>

	<div id="content_wrapper">

		<div id="content">

			<?=$this->load->view('_blocks/navigation');?>

