<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="//cfcc.edu/favicon.ico">

    <title>
		<?php
			//Print the <title> tag based on what is being viewed.
			global $page, $paged;
			wp_title( '|', true, 'right' );
			// Add the blog name.
			bloginfo( 'name' );
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
		?>
	</title>

    <!-- Bootstrap core CSS -->
    <link href="//cfcc.edu/wp-content/themes/CFCC2018/assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="//cfcc.edu/wp-content/themes/CFCC2018/carousel.css" rel="stylesheet">
	<link href="//cfcc.edu/wp-content/themes/CFCC2018/assets/css/style.css" rel="stylesheet">
	<!-- call in the WP header -->
	<?php wp_head(); ?>
  </head>
  <body>

  <header>
     <nav class="navbar navbar-expand-xl navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="//cfcc.edu/images/transparent_onecolor_lores.png" alt="Cape Fear Community College" width="200px" /></a>
     </nav>
  </header>