<div class="main-header-single-wrap">
	<div class="main-header-single" style="background-image:url('<?php the_post_thumbnail_url('timelines-large'); ?>');">

		<div class="main-header-single-title">
			<h1><?php the_title(); ?></h1>
			<?php do_action( 'alx_ext_sharrre' ); ?>
		</div>
		
		<div class="main-header-single-grad"></div>

	</div>
	
	<ul class="main-header-single-meta">
		
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
			<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
				<li class="single-meta-comment">
					<a href="<?php comments_link(); ?>" class="single-meta-comments"><i class="far fa-comment-alt"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
				</li>
			<?php } ?>
		<?php endif; ?>
		
		<li class="single-meta-author">
			<div class="single-meta-icon"><i class="far fa-user"></i></div>
			<div class="single-meta-text"><?php esc_html_e('Author','timelines'); ?> <br /><span><?php the_author_posts_link(); ?></span></div>
		</li>
		<li>
			<div class="single-meta-icon"><i class="far fa-calendar"></i></div>
			<div class="single-meta-text"><?php esc_html_e('Date','timelines'); ?> <br /><span><?php the_time( get_option('date_format') ); ?></span></div>
		</li>
		<li>
			<div class="single-meta-icon"><i class="far fa-file"></i></div>
			<div class="single-meta-text"><?php esc_html_e('Category','timelines'); ?> <br /><span><?php the_category(', '); ?></span></div>
		</li>
	</ul>

</div>
