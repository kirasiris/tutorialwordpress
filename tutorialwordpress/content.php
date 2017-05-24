<?php // Para index.php - (blog page). Muestrame esto si es que es blogpost ?>
<?php if(is_single()) : ?>
            <h2><?php the_title(); ?></h2>
                <?php if(has_post_thumbnail()) : ?>
                  <a class="thumbnail">
                  <?php the_post_thumbnail(); ?>
                  </a>    
                <?php endif; ?>
            <p><?php the_content(); ?></p>

<?php // Para single.php - (blog post page). Si no muestrame esto blogpage ?>

<?php else : ?>
<article>
<h2>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h2>
<p class="lead">
by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span> Posted on <?php the_time('F j, Y g:i a'); ?></p>
             <?php if(has_post_thumbnail()) : ?>
<hr>
                <a href="<?php the_permalink(); ?>" class="thumbnail">
                <?php the_post_thumbnail(); ?>
                </a>    
<hr>
              <?php endif; ?>
<p><?php the_excerpt(); ?></p>
<a class="btn btn-primary btn-block" href="<?php the_permalink(); ?>">Leer mas <span class="glyphicon glyphicon-chevron-right"></span></a>
</article>
<?php endif;?>