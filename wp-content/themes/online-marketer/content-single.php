<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta meta">
			<?php onlinemarketer_posted_on(); ?>
		</div><!-- .entry-meta -->
</header><!-- .entry-header -->

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?>>
	

	<div class="entry-content post_content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'online-marketer' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta meta">
		<?php
			$category_list = get_the_category_list( __( ', ', 'online-marketer' ) );

			$tag_list = get_the_tag_list( '', ', ' );

			if ( ! onlinemarketer_categorized_blog() ) {
			
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'online-marketer' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'online-marketer' );
				}

			} else {

				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'online-marketer' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'online-marketer' );
				}

			}

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'online-marketer' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
