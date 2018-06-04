<?php
/*
Template Name: Search Results Page
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
				<div class="col-md-7 maincolumn">
					<form id="headerform" action="http://cfcc.edu/search-results/">
						<div id="search">
						<div class="searchLabel">

							<label for="q">Search CFCC</label>
							</div>
						  <input type="hidden" name="cx" value="004637514235636343015:yhzbsku25vo" />
						  <input type="hidden" name="cof" value="FORID:11" />
						  <input class="searchField input-xlarge" name="q" id="q" type="text" size="16" maxlength="256" value="Search" title="Search CFCC.edu" onfocus="this.value='';" />
						  <input class="goButton" type="image" name="submit" src="http://cfcc.edu/wp-content/themes/CFCC2014/images/go.gif" alt="Submit" onmouseover="this.src='http://www2.cfcc.edu/wp-content/themes/CFCC2014/images/goOver.gif'" onmouseout="this.src='http://www2.cfcc.edu/wp-content/themes/CFCC2014/images/go.gif'" />
						</div>
					  </form>

							<div id="cse-search-results"></div>
				<script type="text/javascript">
				  var googleSearchIframeName = "cse-search-results";
				  var googleSearchFormName = "cse-search-box";
				  var googleSearchFrameWidth = 700;
				  var googleSearchDomain = "www.google.com";
				  var googleSearchPath = "/cse";
				</script>
				<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
				</div>
				<div class="offset-1 col-md-4 pt-2 sidebar">
					<div id="askray">
					<p>Still have questions? Ray has answers!</p>
					<img src="http://cfcc.edu/wp-content/themes/CFCC2014/images/askray.png" width="96%" alt="Ask Ray!" />
					<p>Type your question below, for example:<br />
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
					<?php get_sidebar(); ?> 
				</div>
			</div>
			
		</div>
	<?php the_field('trackingCode'); ?>
	</main>

<?php get_footer(); ?>  