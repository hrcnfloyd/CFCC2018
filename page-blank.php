<?php
/*
Template Name: Custom Blank
*/
?>
<?php get_header(); ?>  
<main role="main">
	<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div class="post" id="post-<?php the_ID(); ?>">
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
			</div>
	
		<?php endwhile; endif; ?>
			<br style="clear:both;" />
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  