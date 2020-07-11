<?php 
get_header(); 

?>
<!-- Estructura de Paginas Sl-Tema -->
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
?>
<div class="cabecera" style=" background-image: linear-gradient(rgba(255, 94, 0, 0.918), rgba(255, 0, 0, 0.3)), url('<?php echo $thumb_url[0]; ?>'); background-size:cover; background-position:center center;">
	<h1><?php the_title(); ?></h1>
</div>
<article class="container fotos-100 my-5">
	<?php
			if (have_posts()) :
			while (have_posts()) :
			   the_post();
				  the_content();
			endwhile;
		 	endif;
			?>
</article>
<!-- // Estructura de Paginas Sl-Tema -->
<?php get_footer(); ?>
</html>