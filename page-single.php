<?php
/*
Template Name: Single Column Page
*/
?>
<?php get_header(); ?>  
<main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		<div class="col col-12 bg-pos-cc page-banner" style="background-image: url(<?php header_image(); ?>);">
			<div class="container">
				<div class="row">
					<div class="col col-md-7 transparent p-4">
						<h1 class="text-white text-center text-md-left"><?php bloginfo('name'); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-4 pb-4">
			<div class="row">
				<div class="col-10 offset-1 maincolumn">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
							<div class="entry">
								<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

							</div>
						</div>
						<?php endwhile; endif; ?>
						<br style="clear:both;" />
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</div>
		</div>
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  