<?php
if ( post_password_required() ) {
	return;
}

if ( $comments ) {
	?>

	<div class="comments" id="comments">

		<?php
		$comments_number = get_comments_number();
		?>

		<div class="comments-header">

			<h2 class="comment-reply-title">
			<?php
			if ( ! have_comments() ) {
				_e( 'Leave a comment', 'timelines' );
			} elseif ( '1' === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One reply on &ldquo;%s&rdquo;', 'comments title', 'timelines' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s reply on &ldquo;%2$s&rdquo;',
						'%1$s replies on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'timelines'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}

			?>
			</h2><!--/.comment-reply-title-->

		</div><!--/.comments-header-->

		<div class="commentlist">

			<?php
			wp_list_comments(
				array(
					'avatar_size' => 64,
				)
			);

			$comment_pagination = paginate_comments_links(
				array(
					'echo'      => false,
					'end_size'  => 0,
					'mid_size'  => 0,
					'next_text' => __( 'Newer Comments', 'timelines' ) . ' <span aria-hidden="true">&rarr;</span>',
					'prev_text' => '<span aria-hidden="true">&larr;</span> ' . __( 'Older Comments', 'timelines' ),
				)
			);

			if ( $comment_pagination ) {
				$pagination_classes = '';

				// If we're only showing the "Next" link, add a class indicating so.
				if ( false === strpos( $comment_pagination, 'prev page-numbers' ) ) {
					$pagination_classes = ' only-next';
				}
				// If we're only showing the "Prev" link, add a class indicating so.
				if ( false === strpos( $comment_pagination, 'next page-numbers' ) ) {
					$pagination_classes = ' only-prev';
				}
				?>

				<nav class="comments-nav group<?php echo $pagination_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" aria-label="<?php esc_attr_e( 'Comments', 'timelines' ); ?>">
					<?php echo wp_kses_post( $comment_pagination ); ?>
				</nav>

				<?php
			}
			?>

		</div><!--/.commentlist-->

	</div><!--/.comments-->

	<?php
}

if ( comments_open() || pings_open() ) {

	comment_form(
		array(
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);

} elseif ( is_single() ) {

	?>

	<div class="comment-respond" id="respond">

		<p class="comments-closed"><?php _e( 'Comments are closed.', 'timelines' ); ?></p>

	</div><!--/#respond-->

	<?php
}
