
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
					<h1><?php the_category();?></h1>

						<?php if(have_posts()) : ?>

						<?php while(have_posts()) : the_post(); ?>

						<div class="post-meta" id="post-<?php the_ID(); ?>">
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

						<p><?php the_time('F jS, Y') ?> | Posted in: <?php the_category(', ') ?> by <?php the_author() ?></p>

						<div class="post-content"><?php the_excerpt(','); ?>
						<p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
						continue reading.....</a></p>

						</div>
						</div>

						<div class="post-clear"></div>

						<?php endwhile; ?>

						<div id="post-navigator">
						<?php if (function_exists('wp_pagenavi')) : ?>
						<?php wp_pagenavi(); ?>
						<?php else : ?>
						<div class="col col-md-6 text-left"><?php previous_posts_link('Newer Entries &raquo;'); ?></div>
						<div class="col col-md-6 text-right"><?php next_posts_link('&laquo; Older Entries'); ?></div>
						<?php endif; ?>
						</div>

						<div class="post-clear"></div>

						<?php else : ?>

						<h2>The category had been deleted</h2>

						<?php endif; ?>
				</div>
			</div>
		</div>
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  