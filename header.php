<?php header("Access-Control-Allow-Origin: *"); ?>
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/default.css">
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://emt.github.io/fieldwork-v2/css/main.css" type="text/css">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<?php if ( is_single() ) {
	$is_project = 'hero-header project';
} ?>
<body <?php body_class($is_project); ?>>
<?php get_sidebar(); ?>
<div class="black-overlay"></div>
<header id="site-header">
	<div>
		<a class="marque" href="http://emt.github.io/fieldwork-v2/">
			<img class="red-marque" src="<?php echo get_template_directory_uri(); ?>/images/fw-logo.svg" alt="Fieldwork – Home" />
		</a>
		<ul class="social-icons header-social-icons">
				<li><a href="https://twitter.com/MadeByFieldwork" class="icon-twitter"></a></li>
				<li><a href="http://instagram.com/madebyfieldwork" class="icon-instagram"></a></li>
				<li><a href="https://www.facebook.com/madebyfieldwork" class="icon-facebook"></a></li>
				<li><a href="https://github.com/EMT" class="icon-github"></a></li>
		</ul>
		<nav>
			<a class="work fade-transition" href="http://emt.github.io/fieldwork-v2/work">Work</a>
			<a class="us fade-transition" href="http://emt.github.io/fieldwork-v2/us">Us</a>
			<a class="journal fade-transition selected" href="/">Feed</a>
			<a class="contact fade-transition" href="http://emt.github.io/fieldwork-v2/contact">Contact</a>
		</nav>
	</div>
</header>
<a class="sidebar-reveal js-reveal" href="#"><span class="sidebar-reveal-text">Topics</span></a>
<div class="blog-category <?php if (is_single()) { $yourcat = get_category( get_post_meta($post->ID, 'mob_category_prefered', true) ); echo $yourcat->slug . "-main"; }; ?> <?php if(is_archive()) { echo $wp_query->query['category_name'] . '-main'; }; ?>">
<?php if ( is_single() ) { ?>
	<div <?php if ( has_post_thumbnail() ) { ?>style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); background-size: cover;" class="hero-picture"<?php } else { ?> class="hero-picture no-image" <?php } ?>></div>
<?php } ?>
	<div class="page-content">

