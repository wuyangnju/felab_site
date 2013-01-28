	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'onlinemarketer_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'online-marketer' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'online-marketer' ); ?>"><?php printf( __( 'Proudly powered by %s', 'online-marketer' ), 'WordPress' ); ?></a>
            <?php if ( is_home() || is_front_page() ) : ?>
			<span class="sep"> | </span>
			<a href="<?php echo esc_url( __( 'http://wpthemes.co.nz/', 'online-marketer' ) ); ?>"><?php printf( __( '%1$s Theme by %2$s', 'online-marketer' ), 'Online Marketer', 'WPThemes NZ' ); ?></a>
            <?php endif; ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>