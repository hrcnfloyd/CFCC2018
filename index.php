<?php get_header(); ?>  
	<main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		<div class="col col-12 bg-pos-cc page-banner" style="background-image: url(http://cfcc.edu/images/aerialfromSbuildingModified.jpg);">
			<div class="container">
				<div class="row">
					<div class="col col-md-7 transparent p-4">
						<h1 class="text-white text-center text-md-left">CFCC News Wire</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container pt-4 pb-4 maincolumn newswire">
			<?php if (have_posts()) : while (have_posts()) : the_post(); $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
			<div class="post pb-4" id="post-<?php the_ID(); ?>">
				<div class="row">
					<div class="col-lg-4 pt-3">
						<img src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>" width="100%">
					</div>
					<div class="col-lg-8">
						<h1><?php the_title(); ?></h1>
						<p><?php the_time('F jS, Y') ?> by <?php the_author(); ?></p>
						<div class="entry">
							<?php the_excerpt(); ?>
							<p><a href="<?php echo get_permalink() ?>" title="<?php the_title(); ?>" class="btn btn-outline-dark">Read More &raquo;</a></p>
						</div>
					</div>
				</div>
				<hr />
			</div>

			<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

			<?php endif; ?>
					
		</div>
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  