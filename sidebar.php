<aside>
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			
			<?php get_search_form(); ?>
			
		<?php endif; ?>
</aside>