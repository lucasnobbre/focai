<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php language_attributes('xhtml'); ?> xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">


<meta http-equiv="content-type" content="<?php bloginfo('html_type')?>;charset=<?php bloginfo('charset'); ?>"/>
	
<title><?php wp_title( '|', true, 'left' ); ?></title>

<link rel="profile" href=" http://gmpg.org/xfn/11" />

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head()?>

<script type="text/javascript"
   src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

  
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css" type="text/css" media="screen" />
</head>
<body <?php body_class()?>>

<div id="header">
<h1><a href="<?php echo site_url()?>" title="<?php bloginfo('name')?>"><?php bloginfo('name')?></a></h1>
<h2><?php bloginfo('description')?></h2>
</div>

<?php get_template_part('menu') ?>
<!--<div id="footermenu">
<?php //wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => '1' ) ); ?>
</div>-->

<!--<div class="divider"></div>-->
<div id="pagewidth">

<div id="wrapper" class="clearfix" >

<div id="maincol" >