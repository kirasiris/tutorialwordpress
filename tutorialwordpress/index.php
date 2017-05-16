<?php get_header(); ?>
<!-- Page Content -->
<div class="container">
<div class="row">
<!-- Blog Entries Column -->
<div class="col-md-8">
<!-- First Blog Post -->
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<article>
<h2>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<p class="lead">
by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('F j, Y g:i a'); ?></p>
<hr>
             <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="thumbnail">
                <?php the_post_thumbnail(); ?>
                </a>    
              <?php endif; ?>
<hr>
<p><?php the_excerpt(); ?></p>
<a class="btn btn-primary" href="<?php the_permalink(); ?>">Leer mas <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
</article>
<?php endwhile; ?>
<?php else : ?>
<p><?php __('Ningun Post Encontrado') ?></p>
<?php endif; ?>
<!-- Pager -->
<ul class="pager">
<li class="previous">
<a href="#">&larr; Older</a>
</li>
<li class="next">
<a href="#">Newer &rarr;</a>
</li>
</ul>
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