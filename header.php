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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/default.css?v3">
	<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://madebyfieldwork.com/css/main.css?v2" type="text/css">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<?php if ( is_single() ) { ?>
		<meta property="og:title" content="<?php the_title(); ?>"/>
		<meta property="og:type" content="post"/>
		<meta property="og:url" content="<?php the_permalink(); ?>"/>
		<meta property="og:image" content="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"/>
		<meta property="og:site_name" content="Fieldwork"/>
		<meta property="og:description"
		      content="<?php the_excerpt(); ?>"/>
	<?php } ?>

</head>
<?php if ( is_single() ) {
	$is_project = 'hero-header project';
} ?>
<body <?php body_class($is_project); ?>>
<?php get_sidebar(); ?>
<div class="black-overlay"></div>
<header id="site-header">
	<div>
		<a class="marque" href="http://madebyfieldwork.com">
			<img width="12px" height="20px" class="red-marque" src="<?php echo get_template_directory_uri(); ?>/images/fw-logo.svg" alt="Fieldwork – Home" />
		</a>
		<ul class="social-icons header-social-icons">
			<li><a href="https://twitter.com/MadeByFieldwork" class="icon-twitter"></a></li>
			<li><a href="http://instagram.com/madebyfieldwork" class="icon-instagram"></a></li>
			<li><a href="https://www.facebook.com/madebyfieldwork" class="icon-facebook"></a></li>
			<li><a href="https://github.com/EMT" class="icon-github"></a></li>
		</ul>
		<nav>
			<a class="work fade-transition" href="http://madebyfieldwork.com/work">Work</a>
			<a class="us fade-transition" href="http://madebyfieldwork.com/us">Us</a>
			<a class="journal fade-transition selected" href="/emt">Blog</a>
			<a class="contact fade-transition" href="http://madebyfieldwork.com/contact">Contact</a>
		</nav>
	</div>
</header>
<a class="sidebar-reveal js-reveal" href="#"><span class="sidebar-reveal-text">Topics</span></a>
<div class="blog-category <?php if (is_single()) { $yourcat = get_category( get_post_meta($post->ID, 'mob_category_prefered', true) ); echo $yourcat->slug . "-main"; }; ?> <?php if(is_archive()) { echo $wp_query->query['category_name'] . '-main'; }; ?>">
<?php if ( is_single() ) { ?>
	<div <?php if ( has_post_thumbnail() ) { ?>style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>'); background-size: cover;" class="hero-picture"<?php } else { ?> class="hero-picture no-image" <?php } ?>></div>
<?php } ?>
	<div class="page-content">

