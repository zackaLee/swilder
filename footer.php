<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package swilder
 */
?>	</div><!-- wrap -->
	</div><!-- #content -->
    </div><!-- #page -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'swilder' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'swilder' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'swilder' ), 'swilder', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div>
	</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
