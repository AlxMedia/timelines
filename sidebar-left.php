<?php $sidebar = timelines_sidebar_secondary(); ?>

<div class="left-sidebar">
	<div class="left-sidebar-inner styled-scrollbars">
		<div class="left-sidebar-inner-pad">
			
			<div class="sidebar sidebar-content">
					
				<?php if ( is_single() && ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
					<div class="author-bio group">
						<div class="author-bio-inner">
							<div class="author-bio-image">
								<?php echo get_avatar(get_the_author_meta('user_email'),'200'); ?>
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="103px" viewBox="0 0 200 103" enable-background="new 0 0 200 103" xml:space="preserve">
								<path fill="none" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M195.675,98.851
									c0-52.17-42.822-94.463-95.644-94.463c-52.823,0-95.644,42.293-95.644,94.463"/>
								</svg>
							</div>
							<div class="author-bio-name"><?php the_author_meta('display_name'); ?></div>
							<div class="author-bio-description"><?php the_author_meta('description'); ?></div>
						</div>
					</div>
				<?php endif; ?>
				
				<?php if ( is_single() && ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) ) { get_template_part('inc/related-posts'); } ?>
				
				<?php dynamic_sidebar($sidebar); ?>
				
			</div><!--/.sidebar-content-->

		</div>
	</div>
</div>