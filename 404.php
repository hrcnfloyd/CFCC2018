<?php get_header(); ?>  
<main role="main">
	<a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>	
		    <div class="container">
				<div class="row pt-5">
					<h1>Error 404 - Page Not Found</h1>
					<hr />
				</div>
    			<div class="row pt-5 pb-5">
					<div class="col">
    					<img src="http://cfcc.edu/wp-content/themes/CFCC2014/images/CowDog.gif" alt="Oops! Sorry, we might have messed up." width="300" height="300" />
    					<p>Oops! It seems we don't have what you are looking for.</p>
        				<p><a href="<?php echo home_url(); ?>">Go back to the <?php bloginfo('name'); ?> homepage and try again.</a></p>
					</div>
					<div class="col">
						<div class="bg-primary text-center pt-3 pb-4">
							<p class="text-white">Still have questions? Ray has answers!</p>
							<img src="http://cfcc.edu/wp-content/themes/CFCC2014/images/askray.png" width="96%" alt="Ask Ray!" />
							<p class="text-white">Type your question below, for example:<br />
							"How do I apply?"</p>
							<form id="questionForm" method="post" action="http://cfcc.intelliresponse.com/studentservices/">
								<input type="hidden" name="interfaceID" value="-1"/>
								<input type="hidden" name="id" id="respId" value="-1"/>
								<input type="hidden" name="requestType"/>
								<input type="hidden" name="source" id="sourceId" value="1"/>
								<input type="text" id="question" name="question" title="Ask Ray: Natural Languange Search Feature" placeholder="Type your question here" value="" size="30" maxlength="250" />
								<input id="AskButton" type="submit" name="NormalRequest" value="Submit"/>
							</form>
						</div>
					</div>
				</div>
			</div>
</main>
<?php the_field('trackingCode'); ?>
<?php get_footer(); ?>  