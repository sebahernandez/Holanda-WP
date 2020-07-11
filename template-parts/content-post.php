<?php
/**
 * Template part para post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sl-tema
 */
?>

<section class="mb-5">
    <!-- Articulos Recientes -->
    <article class="content background-grey">
        <div class="container">
            <div class="heading-text heading-section">
                <h2 class="py-5">Articulos Recientes</h2>
            </div>
            <div class="row">
                <?php query_posts( array ( 'posts_per_page' => 6 ) ); ?>
                <?php while ( have_posts() ) : the_post();?>
                <div class="col-md-4 py-3">
                    <div class="card animate__animated animate__fadeInDown">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold"><a
                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p class="card-text"><?php the_excerpt('5'); ?></p>
                            <p><a href="<?php the_permalink(); ?>" class="item-link">Continuar leyendo...</a></p>
                        </div>
                    </div>
                </div>
                <?php endwhile; // Final del loop ?>
                <?php wp_reset_query(); // reseteando Query?>
            </div>
        </div>
    </article>
    <!-- Final: Articulos Recientes -->
</section>