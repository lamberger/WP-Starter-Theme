<?php get_header(); ?>
<div class="container">
	<div class="row">
		
		
		<div class="eightcol">
			
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			
		<article <?php post_class() ?>>
		
			<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			<time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l, F jS, Y') ?></time>
			
			<?php the_excerpt() ?>
			
			<footer><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></footer>
		
		</article>

		<?php endwhile; ?>

		<?php if (show_posts_nav()) : ?>
		<nav>
			<ul>
				<li><?php next_posts_link('&laquo; Older Entries') ?></li>
				<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
			</ul>
		</nav>
		<?php endif; ?>

		<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2>No posts found.</h2>");
		}
		get_search_form();

		endif;
		?>
			
		</div><!-- End eightcol -->  
		
		
		
		<div class="fourcol last">
		
			<?php get_sidebar(); ?>
			
		</div><!-- End fourcol -->

	</div><!-- End row-->

</div><!-- End container -->
<?php get_footer(); ?>