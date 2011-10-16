<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
		
		<div class="eightcol">
			<ul>
				<?php wp_list_bookmarks('title_li'); ?>
			</ul>
			
		</div><!-- End eightcol -->
		
		<div class="fourcol last">
		
			<!-- Sidebar stuff here-->
			
		</div><!-- End fourcol -->

	</div><!-- End row-->

</div><!-- End container -->

<?php get_footer(); ?>