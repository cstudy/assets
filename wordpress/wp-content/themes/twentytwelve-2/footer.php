<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			
			<?php
    			if ( function_exists( 'the_privacy_policy_link' ) ) {
    				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
    			}
			?>
			
			Powered by <a href="https://github.com/WordPress/WordPress" target="_blank" rel="noopener noreferrer" class="imprint" title="优雅的个人发布平台">
				WordPress
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>


</body>
</html>
