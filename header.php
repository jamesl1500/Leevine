<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0px !important;">
<head>
    <!-- FONTAWESOME -->
    <script src="https://use.fontawesome.com/780689fece.js"></script>
    
	<!-- TITLE -->
	<title>
		<?php bloginfo('name'); ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	</title>
	
	<!-- META -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="description" content="<?php echo bloginfo('description'); ?>">
    <meta name="robots" content="index,follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="James Latten JR">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/james-logo.jpg" type="image/png" />
    
    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/materialize.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/Main.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- WP HEAD -->
    <?php wp_head(); ?>
</head>
<?php
if(is_front_page()){
    require 'templates/main-header.php';
}else if(is_single()){
    require 'templates/post-header.php';
}else if(!is_home() && !is_front_page()){
    require 'templates/page-header.php';
}
?>
