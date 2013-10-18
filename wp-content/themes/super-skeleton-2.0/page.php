<?php get_header(); ?>


<!-- ============================================== -->


<!-- Super Container -->
<div class="super-container main-content-area" id="section-content">

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

				<h1 class="title"><span><?php the_title(); ?></span></h1>

				<!-- FEATURED IMAGE (optional) -->
				<?php if(get_option_tree('show_featured_image') == 'Yes') : ?>
						<?php if (has_post_thumbnail( $post->ID )) 	{
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
						<div class="featured-image-insert">
							<img class="aligncenter" src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
						</div>
					<br class="clearfix" />
					<?php } else {} ?>
				<?php endif; ?>

				<?php the_content(); ?>

				<?php wp_link_pages('before=<br /><div id="page-links"><span>Pages:</span>&after=</div><hr />&link_before=<div>&link_after=</div>'); ?>


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