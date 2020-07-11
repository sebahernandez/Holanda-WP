<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-tmp
 */

get_header()?>

<div class="container" style="margin-top:150px;">
     <div class="row">
        <div class="col-sm-8">

		<?php while (have_posts()) : the_post(); ?>
		
            <div class="card mb-4">
              <div class="card-body">
	             <div class="titulo-post">
                 <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']); ?>
                 <?php the_time('F j, Y'); ?> 
		             <h2 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	             </div>
                  
                  <p class="card-text"><?php the_excerpt(); ?> </p>
                  <a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver Articulo &rarr;</a>
              </div>
			</div>
			
			<?php endwhile; // end of the loop. ?>
            
          </div>
     <div class="col-sm-4">
       <?php get_sidebar();?>
     </div>
     </div>
   </div>


<?php get_footer() ?>