  <?php get_header(); ?>

  <!-- Header -->
  <header class="container blog-header py-2" style="margin-top:70px;">
      <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 text-left">
              <a class="blog-header-logo text-dark display-4" href="#">H<img
                      src="<?php echo get_template_directory_uri(); ?>/img/holland.png" alt="" class="img-fluid">landa
              </a>
          </div>
          <div class="align-items-center col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end">
              <a class="btn btn-sm btn-outline-dark rounded-0" data-toggle="modal" data-target="#exampleModal"> <i
                      class="fas fa-plus"></i> Publicar un
                  articulo</a>
          </div>
      </div>
  </header>
  <!-- // Header -->

  <!-- Modal login -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h2 class="modal-title" id="exampleModalLabel">Publica un post</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="https://slagosh.laboratoriodiseno.cl/wordpress/wp-login.php" method="post"
                      name="loginform">

                      <div class="form-group">
                          <label>Usuario:</label>
                          <input type="text" class="form-control login-username" name="log" required />
                      </div>

                      <div class="form-group">
                          <label>Contraseña:</label>
                          <input type="password" class="form-control login-password" name="pwd" required />
                      </div>

                      <div class="form-group">
                          <label for="rememberme" class="mm-remember-me">
                              <input name="rememberme" id="rememberme" type="checkbox" checked="checked"
                                  value="forever">
                              Recordar Contraseña
                          </label>
                      </div>

                      <div>
                          <button type="submit" name="wp-submit" class="btn btn-warning btn-block">Entrar</button>
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>


  <section class="mb-5">
      <!-- Articulos Recientes -->
      <section class="content background-grey">
          <div class="container">
              <div class="heading-text heading-section">
                  <h2 class="py-5">Articulos Recientes</h2>
              </div>
              <div class="row">
                  <?php query_posts(); ?>
                  <?php while ( have_posts() ) : the_post();?>
                  <div class="col-md-4 py-3">
                      <div class="card">
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
      </section>
      <!-- Final: Articulos Recientes -->
  </section>

  <?php get_footer(); ?>