<?php
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<!-- <aside  id="secondary" class="widget-area mt-5 border border-warning row">
	<div class="col-md-4">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</aside> -->


	<div class="card my-4">
		<h5 class="card-header bg-dark text-light ">Categorias</h5>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-6">
				<?php the_category(); ?>
				</div>
				
			</div>
		</div>
	</div>

	<div class="card my-4">
		<h5 class="card-header bg-dark text-light">Etiquetas</h5>
		<div class="card-body">
		<?php the_tags(" <br />");?>

		</div>
	</div>
