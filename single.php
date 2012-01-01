<?php get_header(); ?>

	<div class="container">
	<div class="row">
		
		<div class="eightcol">
			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				This entry was posted
				<?php /* This is commented, because it requires a little adjusting sometimes.
				You'll need to download this plugin, and follow the instructions:
				http://binarybonsai.com/wordpress/time-since/ */
				/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
				on <time datetime="<?php the_time('Y-m-d') ?>" pubdate><?php the_time('l, F jS, Y') ?> at <?php the_time() ?></time>
				and is filed under <?php the_category(', ') ?>.
			<h2><?php the_title(); ?></h2>
			
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
			
			<footer>	
				
				Follow responses <?php post_comments_feed_link('RSS 2.0'); ?> feed.

				<?php if ( comments_open() && pings_open() ) {
				// Both Comments and Pings are open ?>
				Leave a<a href="#respond"> response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

				<?php } elseif ( !comments_open() && pings_open() ) {
				// Only Pings are Open ?>
				Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

				<?php } elseif ( comments_open() && !pings_open() ) {
				// Comments are open, Pings are not ?>
				You can skip to the end and leave a response. Pinging is currently not allowed.

				<?php } elseif ( !comments_open() && !pings_open() ) {
				// Neither Comments, nor Pings are open ?>
				Both comments and pings are currently closed.

				<?php } edit_post_link('Edit this entry','','.<br />'); ?>
				<?php previous_post_link('&laquo; %link') ?> <?php next_post_link('%link &raquo;') ?>
			</footer>
			
			<?php comments_template(); ?>
			
		</article>
			
		</div><!-- End eightcol -->
		
		<div class="fourcol last">
		
			<?php get_sidebar() ?>
		
		</div><!-- End fourcol-->

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>
	</div><!-- End row-->

</div><!-- End container -->

<?php get_footer(); ?>