<?php
/*
Template Name: Academic Program Hub
*/
?>

<?php get_header(); ?>  
<main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		<div class="col col-12 bg-pos-cc page-banner" style="background-image: url(<?php the_field('hub_header_image'); ?>);">
			<div class="container">
				<div class="row">
					<div class="col col-md-7 transparent p-4">
						<h1 class="text-white text-center text-md-left"><?php bloginfo('name'); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-5">
			<div class="row">
				<div class="col col-xl-4 text-center sidebar">
					<?php the_field('hub_sidebar'); ?> 
				</div>
				<div class="col col-xl-8 maincolumn">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
							<div class="entry">
								<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
		<div class="col-10 offset-1 pb-4">
			<div class="row">
				<div class="col pt-5">
					<h2 class="display-4 text-center"><?php the_field('hub_grid_title'); ?></h2>
				</div>
			</div>
			<div class="row hubgrid">
				<!-- this is the repeating field area -->
        		<?php // check if the repeater field has rows of data
				if( have_rows('hub_grid_repeater') ):
				// loop through the rows of data
				while ( have_rows('hub_grid_repeater') ) : the_row(); ?>
				
					<div class="col-lg-3 bg-dark bg-pos-cc hubitem" style="background-color:<?php the_sub_field('hub_grid_color'); ?>!important;background-image: url(<?php the_sub_field('hub_grid_image'); ?>);">
						<a href="<?php the_sub_field('hub_grid_link'); ?>" title="<?php the_sub_field('hub_grid_title'); ?>" class="transparent link-transition"><h3 class="text-white text-center"><?php the_sub_field('hub_grid_title'); ?></h3></a>
					</div>
				
				<?php endwhile;
					else :
					// no rows found
					endif; ?>
					<!-- end of the repearting field -->
			</div>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  