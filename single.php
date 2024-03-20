<?php get_header(); ?>

<div class="main-content">

	<?php while ( have_posts() ): the_post(); ?>
	
		<article id="post-<?php the_ID(); ?>" <?php post_class('entry-wrap'); ?>>
		
			<div class="entry themeform">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','timelines'),'after'=>'</div>')); ?>
				<div class="clear"></div>
			</div>
			
		</article>
		
		<div class="entry-footer group">

			<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','timelines').'</span> ','','</p>'); ?>
			
			<div class="clear"></div>
			
			<?php do_action( 'alx_ext_sharrre_footer' ); ?>
			
			<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>

			<div class="themeform">
				<?php comments_template(); ?>
			</div>
			
		</div><!--/.entry-footer-->

	<?php endwhile; ?>

</div><!--/.main-content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>