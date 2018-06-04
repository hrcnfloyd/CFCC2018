<?php
/*
Template Name: CFCC 2018 Homepage
*/
?>

<?php get_header(); ?>

<nav class="navbar navbar-expand-lg fixed-bottom bg-primary">
	<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse2" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span></button>
	<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse2">
	<ul class="navbar-nav mr-auto">
    	<li class="nav-item"><a class="nav-link btn btn-outline-light ml-2" href="//goseadevils.com">Sea Devil Athletics</a></li>
    	<li class="nav-item"><a class="nav-link btn btn-outline-light ml-2" href="//capefearstage.com">Cape Fear Stage</a></li>
    	<li class="nav-item"><a class="nav-link btn btn-outline-light ml-2" href="//cfcc.edu/foundation/">Give to CFCC</a></li>
	</ul>
	<form class="form-inline mt-2 mt-md-0" id="headerform" action="http://cfcc.edu/search-results/">
		<input type="hidden" name="cx" value="004637514235636343015:yhzbsku25vo" />
        <input type="hidden" name="cof" value="FORID:11" />
        <input class="form-control mr-sm-2" name="q" id="q" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit">Search</button>
    </form>
	</div>
</nav>

<main role="main">
		<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
		
		<div class="homepage-feature col-12 bg-pos-cc pb-2" style="background-image: url(<?php the_field('background_image_01'); ?>);">
		<!-- <div class="container-video col-lg-12"> -->	
			<div class="container transparent homepage-feature-inner text-center">
				<h2 class="display-4 text-center text-white"><?php the_field('headline_01'); ?></h2>
				<div class="row">
						<div class="col col-lg-4 text-center">
							
							<?php if( have_rows('icon_column_01') ):
							
								while( have_rows('icon_column_01') ): the_row(); ?>

								<img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_image_alt'); ?>" />
								<p><a class="btn btn-lg btn-outline-light" role="button" href="<?php the_sub_field('icon_link'); ?>" title="<?php the_sub_field('icon_link_text'); ?>"><?php the_sub_field('icon_link_text'); ?> »</a></p>

							<?php endwhile; ?>

							<?php endif; ?>

						</div>

						<div class="col col-lg-4 text-center">
							
							<?php if( have_rows('icon_column_02') ):
							
								while( have_rows('icon_column_02') ): the_row(); ?>

								<img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_image_alt'); ?>" />
								<p><a class="btn btn-lg btn-outline-light" role="button" href="<?php the_sub_field('icon_link'); ?>" title="<?php the_sub_field('icon_link_text'); ?>"><?php the_sub_field('icon_link_text'); ?> »</a></p>

							<?php endwhile; ?>

							<?php endif; ?>
							
						</div>

						<div class="col col-lg-4 text-center">
							
							<?php if( have_rows('icon_column_03') ):
							
								while( have_rows('icon_column_03') ): the_row(); ?>

								<img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_image_alt'); ?>" />
								<p><a class="btn btn-lg btn-outline-light" role="button" href="<?php the_sub_field('icon_link'); ?>" title="<?php the_sub_field('icon_link_text'); ?>"><?php the_sub_field('icon_link_text'); ?> »</a></p>

							<?php endwhile; ?>

							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</div>
			
			<!--<video autoplay loop id="video-background" muted plays-inline>
				<source src="http://cfcc.edu/images/video/Visual CFCC.mp4" type="video/mp4">
			</video> -->
			

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->
		
	  <div class="homepage-feature col-12 bg-pos-cc pb-2"  style="background-image: url(<?php the_field('background_image_02'); ?>);">
		  <h2 class="display-4 text-center"><?php the_field('headline_02'); ?></h2>
		  <div class="container homepage-feature-inner text-center">
				<div class="row">
					
		  			<div class="col col-md-4 text-center">
						<?php if( have_rows('icon_column_04') ):
							
								while( have_rows('icon_column_04') ): the_row(); ?>

								<img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_image_alt'); ?>" />
								<p><a class="btn btn-lg btn-outline-dark" role="button" href="<?php the_sub_field('icon_link'); ?>" title="<?php the_sub_field('icon_link_text'); ?>"><?php the_sub_field('icon_link_text'); ?> »</a></p>

							<?php endwhile; ?>

							<?php endif; ?>
					</div>
					
					<div class="col col-md-4 text-center">
						<?php if( have_rows('icon_column_05') ):
							
								while( have_rows('icon_column_05') ): the_row(); ?>

								<img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_image_alt'); ?>" />
								<p><a class="btn btn-lg btn-outline-dark" role="button" href="<?php the_sub_field('icon_link'); ?>" title="<?php the_sub_field('icon_link_text'); ?>"><?php the_sub_field('icon_link_text'); ?> »</a></p>

							<?php endwhile; ?>

							<?php endif; ?>
					</div>

					<div class="col col-md-4 text-center">
						<?php if( have_rows('icon_column_06') ):
							
								while( have_rows('icon_column_06') ): the_row(); ?>

								<img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_image_alt'); ?>" />
								<p><a class="btn btn-lg btn-outline-dark" role="button" href="<?php the_sub_field('icon_link'); ?>" title="<?php the_sub_field('icon_link_text'); ?>"><?php the_sub_field('icon_link_text'); ?> »</a></p>

							<?php endwhile; ?>

							<?php endif; ?>
					</div>
			  </div>
		  </div>
	  </div>
<div class="col-lg-12">
	<div class="row dblue">
	
      <div class="col-10 offset-1">
		  
	  <!-- START THE FEATURETTES -->
		  <h2 class="display-4 text-center text-white pt-4 pb-4">CFCC Newswire</h2>

        <!-- Two columns of text below the carousel -->
        <div class="row pb-5">
			<?php query_posts( 'showposts=4' ); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
			
				<a class="newswirefeature col-12 col-md-6 featurette-bg zoom" href="<?php echo get_permalink() ?>" title="<?php the_title(); ?>" style="background-image: url(<?php echo $featured_img_url ?>);height:400px;">
					<div class="col-12 col-lg-6 transparent mt-5 p-3">
						<h3 class="text-white text-center text-md-left"><?php the_title(); ?></h3>
					</div>
				</a>
			
			<?php endwhile; else: ?>

			<p>Sorry, no posts matched your criteria.</p>

			<?php endif; ?>
          
        </div><!-- /.row -->
		
	  </div>
	</div>
</div>
      <!-- /END THE FEATURETTES -->
	<div class="container pt-5 pb-5">
		<h2 class="display-4 text-center pb-4">Connect with us</h2>
		<div class="row">
			<div id="pixlee_container" class="col col-lg-12"></div><script type="text/javascript">window.PixleeAsyncInit = function() {Pixlee.init({apiKey:'WPChrXO68HPnnVxCy1g'});Pixlee.addSimpleWidget({widgetId:'2382'});};</script><script src="//instafeed.assets.pixlee.com/assets/pixlee_widget_1_0_0.js"></script>
		</div>
	</div>
</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  