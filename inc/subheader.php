<div class="subheader group">

	<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
		<div class="search-trap-focus">
			<button class="toggle-search" data-target=".search-trap-focus">
				<svg class="svg-icon" id="svg-search" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"><path d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z" transform="translate(-20 -31)"></path></svg>
				<svg class="svg-icon" id="svg-close" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"></polygon></svg>
			</button>
			<div class="search-expand">
				<div class="search-expand-inner">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if ( get_theme_mod( 'theme-toggle', 'on' ) == 'on' ): ?>
		<button id="theme-toggle">
			<i class="fas fa-sun"></i>
			<i class="fas fa-moon"></i>
			<span id="theme-toggle-btn"></span>
		</button>
	<?php endif; ?>

	<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
		<?php timelines_social_links() ; ?>
	<?php endif; ?>

</div>