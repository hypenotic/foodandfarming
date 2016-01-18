<?php get_header(); ?>
	<div class="home-hero">
	    <figure style="background-image: url('banner.jpg'); background-size: cover; background-position: center center;"></figure>
	    <div class="animated fadeInDown">
	        <h1><?php dynamic_sidebar( 'home-sentence' ); ?> </h1>
	    </div>
	</div>
	
	<div class="outer-container">
		<div class="inner-container">
		<h2 class="recent-news__home">Recent News</h2>
			<?php while ( have_posts() ) : the_post() ?>
				<article class="index__single-post">
					<?php if(has_post_thumbnail()) :?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('homepage-thumb', array('class' => 'shadow alignleft')); ?></a>
					<?php else :?>
						<a href="<?php the_permalink(); ?>"><img class="shadow alignleft" src="thumb-default.jpg"></a>
					<?php endif;?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="meta"><i><?php the_time('l, F j, Y'); ?></i></p>
					<p><?php echo excerpt(50); ?><a href="<?php the_permalink(); ?>">read more</a></p>
				</article>
			<?php endwhile; ?>
			<div class="oldernewer">
				<div class="older">
						<?php next_posts_link('&laquo; Older Entries') ?>
				</div><!--.older-->
				<div class="newer">
						<?php previous_posts_link('Newer Entries &raquo;') ?>
				</div><!--.older-->
			</div><!--.oldernewer-->
		</div>
	</div>
<?php get_footer(); ?>