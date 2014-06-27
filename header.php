<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--
	Welcome to the source.
	It's been our pleasure.
	-->
	<title><?php echo (wp_title('', false)) ? wp_title('', false) . ' – ' : ''; ?><?php bloginfo( 'name' ); ?></title>
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<div>
		<a class="marque" href="/">
			<!-- <img class="white-marque" src="<?php echo get_template_directory_uri(); ?>/images/fw-logo-white.svg" alt="Fieldwork – Home" /> -->
			<img class="red-marque" src="<?php echo get_template_directory_uri(); ?>/images/fw-logo.svg" alt="Fieldwork – Home" />
		</a>
		<nav>
			<a class="work fade-transition" href="/work">Work</a>
			<a class="us fade-transition" href="/us">Us</a>
			<a class="journal fade-transition" href="/emt">Feed</a>
			<a class="contact fade-transition" href="/contact">Contact</a>
			<a class="search" id="open-search" href="/search">Search</a>
			<a class="index" id="open-index" href="/favourites">Favourites</a>
		</nav>
	</div>
</header>
	
<div class="wrapper<?php if(is_single()) { the_category_unlinked(' '); };?> <?php if(is_archive()) { echo $wp_query->query['category_name'] . '-main'; }; ?>">