<?php get_header(); ?>
	<div class="home-hero">
	    <figure style="background-image: url('banner.jpg'); background-size: cover; background-position: center center;"></figure>
	    <div class="animated fadeInDown">
	        <h1><?php dynamic_sidebar( 'home-sentence' ); ?> </h1>
	    </div>
	</div>
	<section class="block">
	<div id="main" role="main">
	<h3>Recent News</h3>
		<?php while ( have_posts() ) : the_post() ?>
			<article>
				<?php if(has_post_thumbnail()) :?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb', array('class' => 'shadow alignleft')); ?></a>
				<?php else :?>
					<a href="<?php the_permalink(); ?>"><img class="shadow alignleft" src="thumb-default.jpg"></a>
				<?php endif;?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="meta"><i><?php the_time('l, F j, Y'); ?></i></p>
				<p><?php echo excerpt(30); ?><a href="<?php the_permalink(); ?>">read more</a></p>
			</article>
		<?php endwhile; ?>
	</div><!-- /main -->
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>