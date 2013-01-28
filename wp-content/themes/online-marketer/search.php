<?php
/**
 * The template for displaying Search Results pages.
 */

get_header(); ?>

		<div id="content" class="clearfix">
			
				<div id="main" class="col620 clearfix" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'online-marketer' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php onlinemarketer_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php onlinemarketer_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header page-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'online-marketer' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content post_content">
						<h2><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'online-marketer' ); ?></h2>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div>
			
			<?php get_sidebar(); ?>
            
		</div>


<?php get_footer(); ?>