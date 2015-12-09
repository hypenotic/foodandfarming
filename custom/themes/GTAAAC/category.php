<?php get_header(); ?>
	<div class="small-hero">
	    <figure style="background-image: url('banner.jpg'); background-size: cover; background-position: center center;"></figure>
	    <div class="animated fadeInDown">
	        <h1><?php single_cat_title( '', true ); ?></h1>
	    </div>
	</div>

	<div class="outer-container">
		<div class="inner-container">
			<?php while ( have_posts() ) : the_post() ?>
				<article class="index__single-post">
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
		</div>
	</div>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>