<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Say Yeah Motion Media
 */
?><!DOCTYPE html>
<html>
<head>
	<base href="<?php $url_info = parse_url( home_url() ); echo trailingslashit( $url_info['path'] ); ?>">

	<title>Stichtinghumit - Vrienden van Humanitas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
	<script src="https://apis.google.com/js/client.js?onload=init"></script>

    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type='text/css'>
    <!--  <script src="js/main.js"></script> -->   
    

    <!--  <script src="//fast.wistia.com/embed/medias/t0s8f4972a.jsonp" async></script> -->  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 

     <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
     <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/all.min.css"> 

    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/images/favicon.ico" />

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="<?php bloginfo('template_url'); ?>/js/owl/owl.carousel.min.js"></script>
   <!--  <link href="http://owlgraphic.com/owlcarousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="http://owlgraphic.com/owlcarousel/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="http://owlgraphic.com/owlcarousel/owl-carousel/owl.transitions.css" rel="stylesheet"> -->

    <meta property="og:url" content="<?php the_permalink() ?>"/>
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) { echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

    <meta name="pinterest-rich-pin" content="false" />
    <meta name="twitter:card" content="summary" />

    <script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
	<?php wp_head(); ?>
 	
</head>
    <body> 
    <!--  <div id="wrapper"> -->

<header class="header">
    <?php get_sidebar('navigation'); ?>
</header>

<?php //get_sidebar('header'); ?>