<?php
  $file = basename($_SERVER['PHP_SELF']);
  $pagename = str_replace(".php","",$file); 
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie10 lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie10 lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<!-- <meta http-equiv="cleartype" content="on"> -->
	<title>Rocket Tutorial</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<!-- favicons -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="shortcut icon" href="img/favicon.png">

	<!-- Prefetch DNS for external assets -->
	<link href="https://fontastic.s3.amazonaws.com" rel="dns-prefetch">
	
	<!-- Prefetch Resourses -->
	<!-- <link href="sprite.png" rel="prefetch"> -->
	<!-- <link href="webfont.woff" rel="prefetch"> -->
	<!-- <link href="http://mydomain.com/my-next-page.htm" rel="prerender"> -->

	<!-- css -->
	<!--[if !IE]><!-->
		<!-- <link href="<?php if ($section == 'inner') {echo '../'; } ?>assets/css/responsive-table.css" rel="stylesheet" > -->
	<!--<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php if ($section == 'inner') {echo '../'; } ?>assets/css/main.css">

	<!-- javascript -->
	<!--[if (lt IE 9)]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php if ($section == 'inner') {echo '../'; } ?>assets/js/ie.min.js"></script>
		
		<link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
		<link href="<?php if ($section == 'inner') {echo '../'; } ?>assets/cross-domain/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />
		<script src="<?php if ($section == 'inner') {echo '../'; } ?>assets/cross-domain/respond.proxy.js"></script>	
	<![endif]-->
</head>
