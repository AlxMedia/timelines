<?php $related = timelines_related_posts(); ?>

<?php if ( $related->have_posts() ): ?>

<h4 class="small-heading">
	<?php esc_html_e('You may also like','timelines'); ?>
</h4>

<div class="related-posts group">
	
	<?php while ( $related->have_posts() ) : $related->the_post(); ?>
	<div class="featured-card-outer">
		<div class="featured-card">

			<div class="featured-card-image-wrapper">
				<div class="featured-card-image" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('timelines-medium'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium.png<?php endif; ?>');">
					<a class="featured-card-link" href="<?php the_permalink(); ?>"></a>
				</div>
				<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
					<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
						<a class="card-comments" href="<?php comments_link(); ?>"><i class="far fa-comment-alt"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
					<?php } ?>
				<?php endif; ?>
			</div>
			
			<div class="featured-card-content">
				<div class="featured-card-category"><?php the_category(' / '); ?></div>
				<h2 class="featured-card-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
			</div>
			
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>

</div><!--/.related-posts-->
<?php endif; ?>

<?php wp_reset_postdata(); ?>
