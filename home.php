  <?php get_header(); ?>

  <!-- Header -->
  <header class="container blog-header py-2">
      <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 text-left">
              <a class="blog-header-logo text-dark display-4" href="#">H<img
                      src="<?php echo get_template_directory_uri(); ?>/img/holland.png" alt="" class="img-fluid">landa
              </a>
          </div>
          <div class="align-items-center col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end">
              <a class="btn btn-outline-success rounded-0 " data-toggle="modal" data-target="#exampleModal"> <i
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

  <!-- jumbotron -->
  <div class="jumbotron text-white rounded-0 d-flex align-items-center">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <h1 class="font-weight-bold animate__animated animate__zoomIn">Toda la magia y diversidad de
                      los Paises Bajos</h1>
                  <h2 class="animate__animated animate__zoomIn">La capital multicultural del mundo.</h2>
              </div>
          </div>
      </div>
  </div>
  <!-- // jumbotron -->
  <section class="container mt-5">
      <div class="row mb-2">
          <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="card flex-md-row mb-4 box-shadow border-0 h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                      <strong class="d-inline-block mb-2 text-success">Ciudades</strong>
                      <h3 class="mb-0"> <a class="text-dark" href="https://slagosh.laboratoriodiseno.cl/wordpress/amsterdam/">Amsterdam</a></h3>
                      <p class="card-text mb-auto">Visita esta famosa capital holandesa del siglo XVII. Disfruta de
                          edificios históricos, hermosos museos y un ambiente jovial. Da un paseo en barco por los
                          canales, pasea por el parque Vondelpark y ve de compras en el antiguo centro de la ciudad.
                          ¡Ámsterdam es única!</p>
                  </div>
                  <img class="card-img-right flex-auto d-none d-md-block w-50 h-100 img-responsive fit-image"
                      src="<?php echo get_template_directory_uri(); ?>/img/holanda.jpg" alt="Holanda">
              </div>
          </div>
      </div>
  </section>
  <!-- // Jumbotron -->


  <?php

    if ( is_home() ) :

    get_template_part( 'template-parts/content-post' );

    else:
        get_template_part( 'template-parts/content-post', 'none' );

    endif;
   ?>

  <?php get_footer(); ?>