
<header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
</header><!-- .entry-header -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content post_content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'online-marketer' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
    <?php edit_post_link( __( 'Edit', 'online-marketer' ), '<span class="edit-link">', '</span>' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
