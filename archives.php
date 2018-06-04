<?php get_header(); ?>  
<main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		<div class="col col-12 bg-pos-cc page-banner" style="background-image: url(<?php header_image(); ?>);">
			<div class="container">
				<div class="row">
					<div class="col col-md-7 transparent p-4">
						<h1 class="text-white text-center text-md-left">Archives</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-4 pb-4">
			<div class="row">
				<div class="col-10 offset-1 maincolumn">

					<h2>Archives by Month:</h2>
						<ul>
							<?php wp_get_archives('type=monthly'); ?>
						</ul>

					<h2>Archives by Subject:</h2>
						<ul>
							 <?php wp_list_categories(); ?>
						</ul>
					
				</div>
			</div>
		</div>
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  