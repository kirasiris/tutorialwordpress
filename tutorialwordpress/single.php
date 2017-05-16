<?php get_header(); ?>
<!-- Page Content -->
<div class="container">
<div class="row">
<!-- Blog Entries Column -->
<div class="col-md-8">
<!-- First Blog Post -->
<?php if(have_posts()) : ?>
<?php  while(have_posts()) : the_post(); ?>
<?php get_template_part('content' , get_post_format()); ?>
<?php  endwhile ?>
<?php else : ?>
<p><?php __('No Post Found'); ?></p>
<?php endif; ?>
<!-- Pager 
<ul class="pager">
<li class="previous">
<a href="#">&larr; Older</a>
</li>
<li class="next">
<a href="#">Newer &rarr;</a>
</li>
</ul>-->
</div>
<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
<aside>
<?php if(is_active_sidebar('sidebar')) : ?>
<?php dynamic_sidebar('sidebar'); ?>
<?php endif; ?>
</aside>
</div>
</div>
<!-- /.row -->
<hr>
<?php get_footer(); ?>