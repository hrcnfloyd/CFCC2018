<?php
/*
Template Name: Custom Landing Page
*/
?>

<?php get_header('nonav'); ?>

	<main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		<div class="col col-12 bg-pos-cc page-banner" style="background-image: url(<?php the_field('custom_header_image'); ?>);">
			<div class="container">
				<div class="row">
					<div class="col col-md-7 transparent p-4">
						<h1 class="text-white text-center text-md-left"><?php the_field('custom_page_title'); ?></h1>
					</div>
				</div>
			</div>
		</div>
		
		<!-- this is the repeating field area -->
        <?php // check if the repeater field has rows of data
			if( have_rows('custom_section_repeater') ):
			// loop through the rows of data
			while ( have_rows('custom_section_repeater') ) : the_row(); ?>
		
			<div class="col col-12 bg-pos-cc" style="background-color:<?php the_sub_field('custom_section_bgcolor'); ?>!important;background-image: url(<?php the_sub_field('custom_section_bgimage'); ?>);">
			
				<div class="<?php the_sub_field('has_a_container');?>">
					<div class="row">
						<div class="col">
							<h2 class="display-4 <?php the_sub_field('text_color'); ?> text-center"><?php the_sub_field('custom_section_header'); ?></h2>
						</div>
					</div>
					<div class="row">
						<?php the_sub_field('custom_section_content'); ?>
					</div>	
				</div>
				
			</div>
		
		<?php endwhile;
			else :
			// no rows found
			endif; ?>
		<!-- end of the repearting field -->
		
	</main>

<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  