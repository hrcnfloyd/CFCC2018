<?php
/*
Template Name: Academic Program Page
*/
?>

<?php get_header(); ?>  
    <main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		<div class="col col-12 bg-pos-cc page-banner" style="background-image: url(<?php the_field('program_header_image'); ?>);">
			<div class="container">
				<div class="row">
					<div class="col col-md-7 transparent p-4">
						<h1 class="text-white text-center text-md-left"><?php bloginfo('name'); ?></h1>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container pt-3 pb-4">
			<div class="row">
				<div class="col-md-7 maincolumn">
					<?php the_field('program_description'); ?>
				</div>
				<div class="offset-1 col-md-4 sidebar">
					<?php the_field('program_description_sidebar'); ?>
				<!-- page or post sidebar content column -->
				</div>
			</div>
			
		</div>
		
		<!-- Photo Tier -->
		<div class="col col-12">
			<div class="row">
				<div class="col-md-4 bg-pos-cc page-banner" style="background-image: url(<?php the_field('program_image_01'); ?>);">

				</div>
				<div class="col-md-4 bg-pos-cc page-banner" style="background-image: url(<?php the_field('program_image_02'); ?>);">

				</div>
				<div class="col-md-4 bg-pos-cc page-banner" style="background-image: url(<?php the_field('program_image_03'); ?>);">

				</div>
			</div>
		</div>
		
		<div class="col col-12 pt-3 pb-4 cfccblue text-white">
			<div class="container">
				<h2 class="display-4 text-white pt-4 pb-4 text-center"><?php the_field('program_career_title'); ?></h2>
				<div class="row">
					<div class="col-md-4">
						<?php the_field('program_career_col1'); ?>
					</div>
					<div class="col-md-4">
						<?php the_field('program_career_col2'); ?>
					</div>
					<div class="col-md-4">
						<?php the_field('program_career_col3'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-3 pb-4">
			<h2 class="display-4 pt-4 pb-4 text-center"><?php the_field('program_resources_title'); ?></h2>
			<div class="row">
				<div class="col-md-7">
					<?php the_field('program_resources_content'); ?>
				</div>
				<div class="col-md-4 offset-1">
					<h3><?php the_field(''); ?></h3>
					<a class="btn btn-outline-primary btn-lg" href="cfcc.edu/admissions/">Apply to CFCC</a>
					<hr>
					<?php the_field('program_resources_sidebar'); ?>
			</div>
		</div>
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  