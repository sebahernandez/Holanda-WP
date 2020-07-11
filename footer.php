<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>Hollanda</h6>
                <p class="text-justify pr-3">
                    Es un Blog que habla todo sobre la vida en Hollanda, sus lugares mas reconocidos por el mundo y
                    recomendaciones
                    de que ciudades visitar y sus diferentes culturas que migran al viejo continente. </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2">
                <h6>Importante</h6>
                <?php wp_nav_menu( array('menu' => 'Menu Enlaces', 'menu_class' => 'footer-nav'  ));  ?>

            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <ul class="social-icons">
                    <li><a target="_blank" class="facebook" href="<?php the_field('facebook', 'option'); ?>"><i
                                class="fab fa-facebook"></i></a></li>

                    <li><a target="_blank" class="twitter" href="<?php the_field('twitter', 'option'); ?>"><i
                                class="fab fa-twitter"></i></a></li>

                    <li><a target="_blank" class="instagram" href="<?php the_field('instagram', 'option'); ?>"><i
                                class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p class="copyright-text">Copyright &copy; 2020 Todos los derechos reservadores por <a
                        href="#">Sebastián Lagos</a>. </p>
            </div>

        </div>
    </div>
</footer>
<!-- Footer -->

<?php wp_footer(); ?>

</body>

</html>