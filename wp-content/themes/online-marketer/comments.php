	
	<?php if ( post_password_required() ) : ?>
    <div id="comments">
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'online-marketer' ); ?></p>
	</div><!-- #comments -->
	<?php
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
    	<div id="comments">
		<div id="comments-title">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'online-marketer' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</div>

		

		<ol class="commentlist">
			<?php
				wp_list_comments( array( 'callback' => 'onlinemarketer_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'online-marketer' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'online-marketer' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'online-marketer' ) ); ?></div>
		</nav>
		<?php endif; ?>
	</div><!-- #comments -->
	<?php endif; ?>

	<?php
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
    <div id="comments">
		<p class="nocomments"><?php _e( 'Comments are closed.', 'online-marketer' ); ?></p>
    </div>
	<?php endif; ?>

	<?php comment_form(); ?>


