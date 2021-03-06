<!DOCTYPE html>
<!-- /ht Paul Irish - http://front.ie/j5OMXi -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>

<meta name="description" content="Established in 2005, the Greater Toronto Area Agricultural Action Committee (GTA AAC) is a unique partnership involving the four regional municipalities of Halton, Peel, York and Durham, the four Greater Toronto Area Federations of Agriculture (Halton, Peel, York and Durham), the City of Toronto, the Toronto Food Policy Council, the Ontario Ministry of Agriculture and Food Ministry of Rural Affairs; Agriculture and Agri-Food Canada; and the food sector." />
<meta name="author" content="Greater Toronto Area Agricultural Action Committee (GTA AAC)">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, minimum  -scale=1.0, maximum-scale=1.0">
<base href="<?php bloginfo('template_url'); ?>/images/">

<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
<link rel="apple-touch-icon" href="/link/to/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>" />

<!-- /ht Jeremy Keith - http://front.ie/mLXiaS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-all.css" media="all">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Google Web Fonts -->
<link href='https://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

<!-- Modernizr -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/libs/modernizr-1.7.min.js"></script>

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-43957423-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- New Stylesheet -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/style.css" media="all">
</head>
<body <?php body_class(); ?>>

<header>
	<div class="wrapper">
		<div class="nav-wrapper">
			<a href="<?php echo get_option('home'); ?>"><img class="logo" src="logo.png"></a>
			<nav>
				<?php wp_nav_menu( array('theme_location' => 'main-menu', 'container_id' => 'main-nav'));	?>
			</nav>
		</div>
	</div> <!-- Ends .wrapper -->
</header>