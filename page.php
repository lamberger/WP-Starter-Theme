<?php get_header(); ?>

<div class="container">
	<div class="row">
		
		<div class="eightcol">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p>Pages: ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			
		</article>
		
		<?php endwhile; endif; ?>
		</div><!-- End eightcol -->
	
		<div class="fourcol last">
		
			<?php get_sidebar() ?>
		
		</div><!-- End fourcol-->
	
	</div><!-- End row-->

</div><!-- End container -->

<?php get_footer(); ?>