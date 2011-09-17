<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		
		<div class="twelvecol last">
			
			<?php get_search_form(); ?>

				<h2>Archives by Month:</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>

				<h2>Archives by Subject:</h2>
					<ul>
	 					<?php wp_list_categories(); ?>
					</ul>
					
		</div><!-- End twelvecol -->

	</div><!-- End row-->

</div><!-- End container -->

<?php get_footer(); ?>