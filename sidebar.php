<?php $sidebar = timelines_sidebar_primary(); ?>

<div class="right-sidebar styled-scrollbars">
	<aside class="right-sidebar-inner">
		<div class="right-sidebar-inner-pad">
		
			<div class="sidebar sidebar-content">

				<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'sidebar' ) { get_template_part('inc/post-nav'); } ?>
				
				<?php dynamic_sidebar($sidebar); ?>
				
			</div><!--/.sidebar-content-->
		
		</div>
	</aside><!--/.right-sidebar-inner-->
</div><!--/.right-sidebar-->