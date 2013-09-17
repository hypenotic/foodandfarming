<!DOCTYPE html>
<!-- /ht Paul Irish - http://front.ie/j5OMXi -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>

<meta name="description" content="">
<meta name="author" content="">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, minimum  -scale=1.0, maximum-scale=1.0">
<base href="<?php bloginfo('template_url'); ?>/images/">

<link rel="shortcut icon" href="/link/to/favicon.ico">
<link rel="apple-touch-icon" href="/link/to/apple-touch-icon.png">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>" />

<!-- /ht Jeremy Keith - http://front.ie/mLXiaS -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-all.css" media="all">

<!-- Google Web Fonts -->
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

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
<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = '//www.bugherd.com/sidebarv2.js?apikey=9kqjq02mzam69lbcb07mvq';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>
</head>
<body <?php body_class($class); ?>>

	<header class="clear">
		<section class="block">
			<a href="<?php echo get_option('home'); ?>"><img class="left top logo" src="logo.png"></a>
			<?php get_search_form();  ?>
			<?php wp_nav_menu( array('menu' => 'Utility Menu', 'container_id' => 'navigation-utility')); ?>
		</section>
        <div class="main-menu">
        	<section class="menu-block">
			<?php wp_nav_menu( array('theme_location' => 'main-menu', 'container_id' => 'navigation-main'));	?>
			<?php /*?><div id="navigation-mobile">
				<ul id="nav">
					<li><a id="toggle" href="javascript:void(0);">SECTIONS</a></li>
						<ul id="hidden">
							<?php wp_list_categories('orderby=name&title_li='); ?> 
							<?php wp_nav_menu( array('menu' => 'Main Menu')); ?>
							<?php wp_nav_menu( array('menu' => 'Utility Menu')); ?>
						</ul>
						
						<script>
						$("#toggle").click(function (){
						$("#hidden").slideToggle("fast");
						});
						</script>
				</ul>			
			</div><?php */?>
            </section>
        </div>
	</header>
	<?php if (is_home()) { ?>
	<section id="banner" class="block">
		<a href="<?php echo get_option('home'); ?>"><img src="banner.jpg"></a>
	</section>
	<?php } ?>
	<section class="block">
		<div id="main" role="main">