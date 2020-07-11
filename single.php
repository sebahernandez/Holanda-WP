<?php get_header(); ?>
<!-- Contenido Single Page -->
<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row mt-5">
            <!-- Contenido-->
            <div class="content col-md-8">
                <!-- Blog -->
                <div id="blog" class="single-post">
                    <!-- Item de post -->
                    <div class="post-item py-5">
                        <div class="post-item-wrap">

                            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                            <div class="post-item-description">
                                <h2 class="py-2"><?php the_title(); ?></h2>
                                <p class="post-meta-date pb-2"> Publicado el: <?php the_time('F, j, Y'); ?> | Categorías : <?php the_category(', '); ?><br>Etiquetas : <?php the_tags(); ?>
                            </p>
                                <div>

                                    <?php 
                                    // Comprobamos si existe una imagen adjunta y la mostramos
                                    if (!has_post_thumbnail()){
                                        echo '<img src="'.get_post_thumbnail_id().'" alt = "'.get_bloginfo("title").'" />';
                                    }else{
                                        the_post_thumbnail('large', array('class' => 'img-fluid w-100'));
                                    }
                                    ?>
                                </div>
                                <p><?php the_content(); ?></p>
                            </div>

                            <?php endwhile; ?>
                            <?php else: ?>
                            <!-- article -->
                            <article>
                                <h1><?php _e( 'Sorry, no hay articulo disponible.', 'html5blank' ); ?></h1>
                            </article>
                            <!-- /article -->
                            <?php endif; ?>

                            <!-- fin: Comments -->

                        </div>
                    </div>
                    <!-- fin:Post single item -->
                </div>
            </div>
            <!-- fin: content -->
            <!-- Sidebar-->
            <div class="sidebar sticky-sidebar col-md-4 mt-5">
                <?php get_sidebar(); ?>
            </div>
            <!-- fin: Sidebar-->
        </div>
    </div>
</section>
<!-- fin: Single Page -->

<?php get_footer(); ?>