<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />

<title><?php is_front_page() ? bloginfo('description') : wp_title(''); ?> - <?php bloginfo('name'); ?></title>

<meta name="description" content="chin on the tank. Motorcycle stuff in philadelphia" />
<meta name="keywords" content="chin on the tank, vintage, classic, cafe racer, harley, euro, chopper, scrambler, brat, tracker, motorcycle, enthusiasts, philadelphia, honda, triumph, norton, yamaha, kawasaki, suzuki, bsa" />

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">

<link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed for Posts from my site (the main feed)" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3 - <?php bloginfo('name'); ?> " href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Comments Feed - for all the comments on this site" href="<?php bloginfo('comments_rss2_url'); ?>" />

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:500,800" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/data-img-scroller.css?v=1.25" />

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>

<style>
html {
    margin-top: 0 !important;
}
</style>

</head>

<body <?php body_class($class); ?>>
