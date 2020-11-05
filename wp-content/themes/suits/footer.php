<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Suits
 * @since Suits 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info-container">
				<div class="site-info">
					<?php do_action( 'suits_credits' ); ?>
					<?php printf( __( 'Noroff Copyright (c) 2019 Copyright Holder All Rights Reserved.', '' ), '' ); ?>

				</div><!-- .site-info -->
			</div><!-- .site-info-container -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
