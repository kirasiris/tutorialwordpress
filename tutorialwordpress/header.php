<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php bloginfo('description') ?>">
<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="top:32px;">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
			   'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
</ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>