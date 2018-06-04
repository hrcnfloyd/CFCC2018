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
		<div class="container pt-4 pb-4">
			<div class="row">
				<div class="col-10 offset-1 maincolumn newswire">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<h1><?php the_title(); ?></h1>
						<p><?php the_time('F jS, Y') ?> by <?php the_author(); ?></p>
					
						<hr />

						<div class="entry">
							<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

							<p class="postmetadata alt">
								<small>
									This entry was posted
									<?php /* This is commented, because it requires a little adjusting sometimes.
										You'll need to download this plugin, and follow the instructions:
										http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
										/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
									on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
									and is filed under <?php the_category(', ') ?>.
									<!--
									<?php// if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
										// Both Comments and Pings are open ?>
										You can <a href="#respond">leave a response</a>, or <a href="<?php// trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.

									<?php// } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
										// Only Pings are Open ?>
										Responses are currently closed, but you can <a href="<?php// trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.

									<?php// } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
										// Comments are open, Pings are not ?>
										You can skip to the end and leave a response. Pinging is currently not allowed.

									<?php// } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
										// Neither Comments, nor Pings are open ?>
										Both comments and pings are currently closed.-->


									<p><?php edit_post_link('Edit this entry.','',''); ?></p>
								</small>
							</p>
						</div>
					</div>
        
					<?php comments_template(); ?>

					<?php endwhile; else: ?>

					<p>Sorry, no posts matched your criteria.</p>

					<?php endif; ?>
					
					<hr />
					
					<div class="row">
						<div class="col col-md-6 text-left">
							<?php $prev = get_permalink(get_adjacent_post(true,'',true)); 
   								if ($prev != get_permalink()) { ?>
								<a href="<?php echo $prev; ?>" class="btn btn-outline-dark">&lsaquo;&lsaquo; PREVIOUS STORY</a>
							<?php } ?>
						</div>
						<div class="col col-md-6 text-right">
							<?php $next = get_permalink(get_adjacent_post(true,'',false)); 
   								if ($next != get_permalink()) { ?>
								<a href="<?php echo $next; ?>" class="btn btn-outline-dark">NEXT STORY &rsaquo;&rsaquo;</a>
							<?php } ?>
						</div>
					</div>
				</div>				
			</div>		
		</div>
	</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  
