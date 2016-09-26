<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  
  <title><?php  wp_title( '| ', true, 'right' );  ?></title>
  <link rel="stylesheet" type="text/css"  href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <!-- FAV ICON -->
  <link type="image/png" href="<?php echo get_site_url();?>/wp-content/themes/danstheme/img/favicon.png" rel="icon">

  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700|Play:400,700' rel='stylesheet' type='text/css'>
  
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <script src="https://use.fontawesome.com/394c957b2d.js"></script>
  
  <!-- GOOGLE ANALYTICS -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-5182909-2', 'auto');
ga('send', 'pageview');
</script>

<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">

</head>
<body>

 <!-- nav -->
 <div class="nav" role="navigation">
  <a href="#" class="mobile-nav-toggle">Menu</a> 
  <?php
        wp_nav_menu( array('container_class' => 'menu-footer',
        'theme_location' => 'primary') ); ?>
</div>

<!-- /nav -->
