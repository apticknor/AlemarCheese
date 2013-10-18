<?php get_header(); ?>


<!-- Super Container -->
<div class="super-container full-width main-content-area" id="section-content">

	<!-- 960 Container -->
	<div class="container">

		<!-- CONTENT -->
		<div class="eleven columns content">

			<!-- 404 MESSAGE -->
			<?php if ( ! have_posts() ) : ?>
				<h1 class="title"><span>Page Not Found</span></h1>
				<div class="the_content">
					<p><?php _e( 'Sorry but the page you requested could not be found!' ); ?></p>
				</div>
			<?php endif; ?>

			<!-- THE POST LOOP -->
			<?php while ( have_posts() ) : the_post(); ?>

				<h2 class="title"><span><?php the_title(); ?></span></h2>
				<?php the_content(); ?>

			<?php endwhile; ?>

		</div>
		<!-- /CONTENT -->

		<!-- ============================================== -->

		<!-- SIDEBAR -->
		<div class="five columns sidebar">

			<?php dynamic_sidebar( 'default-widget-area' ); ?>

		</div>
		<!-- /SIDEBAR -->

	</div>
	<!-- /End 960 Container -->

</div>
<!-- /End Super Container -->


<!-- ============================================== -->


<?php get_footer(); ?>