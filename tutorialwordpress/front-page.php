<?php get_header(); ?>
<div class="container">
<!--  First row -->
<div class="row">
<div class="col-md-8">
<img class="img-responsive img-rounded" src="<?php echo get_theme_mod('showcase_image',get_bloginfo('template_url').'/img/showcase.jpg'); ?>" alt="">
</div>
<div class="col-md-4">
<h4><?php echo get_theme_mod('showcase_title','Titulo'); ?></h4>
<p><?php echo get_theme_mod('showcase_description','Descripcion'); ?></p>
<a class="button button-caution button-block" href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
</div>
</div>
<hr>
<!-- Second row -->        
<div class="row">
<div class="col-lg-12">
<div class="text-center">
<?php if(is_active_sidebar('call-to-action')) : ?>
	<?php dynamic_sidebar('call-to-action'); ?>
<?php endif; ?>
</div>
</div>
</div>
<!-- Third row -->        
<div class="row">
<div class="col-md-4" id="front-page-boxes">
<?php if(is_active_sidebar('box1')) : ?>
	<?php dynamic_sidebar('box1'); ?>
<?php endif; ?>

</div>
<div class="col-md-4" id="front-page-boxes">
<?php if(is_active_sidebar('box2')) : ?>
	<?php dynamic_sidebar('box2'); ?>
<?php endif; ?>

</div>
<div class="col-md-4" id="front-page-boxes">
<?php if(is_active_sidebar('box3')) : ?>
	<?php dynamic_sidebar('box3'); ?>
<?php endif; ?>


</div>
</div>
<hr>
<?php get_footer(); ?>