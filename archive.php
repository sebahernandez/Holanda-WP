<?php
get_header();
?>
<div class="container" style="margin-top:150px;">
     <div class="row">
        <div class="col-md-12 col">

		<?php while (have_posts()) : the_post(); ?>
		
            <div class="card mb-4">
              <div class="card-body">
                  <h2 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                  <p class="card-text"><?php the_excerpt(); ?> </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-warning">Ver Articulo &rarr;</a>
              </div>
                  <div class="card-footer text-muted">
                    <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?>
                </div>
			</div>
			
			<?php endwhile; // end of the loop. ?>
            
          </div>
     </div>
   </div>

<?php
get_footer();?>