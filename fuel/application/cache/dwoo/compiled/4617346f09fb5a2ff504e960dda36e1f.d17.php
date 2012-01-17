<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
		<title><!--__FUEL_MARKER__0-->Team</title>
		<meta charset="UTF-8" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="MSSmartTagsPreventParsing" content="true" />

	<meta name="keywords" content="<!--__FUEL_MARKER__1-->" />
	<meta name="description" content="<!--__FUEL_MARKER__2-->" />

	<link href="/assets/css/main.css?c=943948800" media="all" rel="stylesheet"/>
			
	<script src="/assets/js/jquery.js?c=943948800" type="text/javascript" charset="utf-8"></script>
	<script src="/assets/js/main.js?c=943948800" type="text/javascript" charset="utf-8"></script>
			
		<base href="http://fuelcms.local/" />
	
</head>


<body class="<!--__FUEL_MARKER__3-->team ">
<div id="container">
	<div id="container_inner">
		<div id="header">
			<div id="topnav">
				<ul>
					<li><a href="http://www.thedaylightstudio.com">About Daylight</a></li>
					<li class="last"><a href="mailto:info@thedaylightstudio.com">Contact</a></li>
				</ul>
			</div>
			<a href="http://www.thedaylightstudio.com" id="daylight_logo"></a>
		
	
			<a href="http://fuelcms.local/" id="fuel_logo">FUEL CMS</a>

			<div id="fuel_intro">
				<h1 id="fuel_cms">FUEL CMS</h1>
				<div id="fuel_tagline"></div>
				<div id="fuel_text">
					<p class="intro"><strong>An easy, flexible, empowering Content Management System for rapid development</strong>
						that transforms your CodeIgniter projects into client manageable brilliance. 
					</p>
				</div>
			</div>
		
		
		</div>
	
		<div id="main">	
	<div id="main_inner">
		<!--__FUEL_MARKER__4--><h1>Team</h1>
<p>This is our team page</p>	</div>
	
		</div>
	</div>
	<div id="footer">
		<div id="footer_top">
		
		</div>
		<div id="footer_bot">
			<div id="copyright">FUEL CMS is a product by <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a>. <br />Copyright &copy; 2011 Daylight Studio,  All Rights Reserved.</div>
		</div>
	</div>
</div>

</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>