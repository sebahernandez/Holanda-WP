<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content"
                aria-controls="navbar-content" aria-expanded="false"
                aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-content">
                <?php
		wp_nav_menu( array(
			'theme_location' => 'Menu Principal',
			'menu_id'        => 'primary-menu',
			'container'      => false,
			'depth'          => 2,
			'menu_class'     => 'navbar-nav mr-auto',
			'walker'         => new Bootstrap_NavWalker(),
			'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
		) );
		?>
            </div>
            <form class="form-inline my-2 my-lg-0 ">
                <input class="form-control mr-sm-2 rounded-pill border-0" type="text" placeholder="Buscar..."
                    value="<?php the_search_query(); ?>" name="s" aria-label="Search">
                <input type="hidden" value="<?php the_search_query(); ?>" required />
                <button class="btn btn-dark my-2 my-sm-0 rounded-pill" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <!-- // Navbar -->


  