<?php get_header(); ?>

<div class="main-content">
	
	<?php get_template_part('inc/subheader'); ?>
	
	<?php while ( have_posts() ): the_post(); ?>
	
		<article <?php post_class('entry-wrap'); ?>>	

			<header class="entry-header group">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			
			<div class="entry themeform">
				<?php the_content(); ?>
				<div class="clear"></div>
			</div><!--/.entry-->
			
			<div class="entry-footer group">
				<div class="themeform">
					<?php comments_template(); ?>
				</div>
			</div>

		</article><!--/.post-->	
	
	<?php endwhile; ?>

</div><!--/.main-content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>