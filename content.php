<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
	<div class="list-card">
		<div class="list-card-wrap">
		
			<div class="list-card-left">
				<div class="list-card-image" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('timelines-medium'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium.png<?php endif; ?>');">
					<a class="list-card-link" href="<?php the_permalink(); ?>"></a>
					
					<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
						<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
							<a class="card-comments" href="<?php comments_link(); ?>"><i class="far fa-comment-alt"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
						<?php } ?>
					<?php endif; ?>
					
				</div>
			</div>
			
			<div class="list-card-right">
			
				<div class="list-card-category"><?php the_category(' / '); ?></div>
				
				<h2 class="list-card-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				
				<?php if (get_theme_mod('excerpt-length','20') != '0'): ?>
					<div class="clear"></div>
					<div class="list-card-excerpt">
						<?php the_excerpt(); ?>
					</div>
				<?php endif; ?>
				
				<div class="list-card-date"><?php the_time( get_option('date_format') ); ?></div>
				
			</div>
			
		</div>
		
	</div>
</article>