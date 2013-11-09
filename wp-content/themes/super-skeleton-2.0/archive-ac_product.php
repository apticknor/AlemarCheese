<?php get_header(); ?>


<!-- ============================================== -->


<!-- Super Container -->
<div class="super-container full-width main-content-area" id="section-content">

	<!-- 960 Container -->
	<div class="container">

		<!-- CONTENT -->
		<div class="sixteen columns content">

            <!-- Page Content (if it exists) -->
			<?php while ( have_posts() ) : the_post(); ?>
			    <div class="the_content post type-post hentry excerpt clearfix" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
                    <?php endif; ?>
			        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			        <div><?php the_excerpt(); ?></div>
			        <div>
			            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="<?php echo get_field("secure_button_id"); ?>">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    </div>
			    </div>
			<?php endwhile; ?>

			<!-- ============================================== -->

		</div>
		<!-- /CONTENT -->

		<!-- ============================================== -->

	</div>
	<!-- /End 960 Container -->

</div>
<!-- /End Super Container -->


<!-- ============================================== -->


<?php get_footer(); ?>