<?php get_header(); ?>


	<h1><?php printf('<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="post-excerpt">
				<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
			</div>
	
			
		</div><!--.post-single-->
	<?php endwhile; else: ?>
		<div class="no-results">
			<p><strong>There has been an error.</strong></p>
			<p>We apologize for any inconvenience, please <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">return to the home page</a> or use the search form below.</p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--noResults-->
	<?php endif; ?>
		
	<div class="oldernewer">
		<div class="older">
				<?php next_posts_link('&laquo; Older Entries') ?>
		</div><!--.older-->
		<div class="newer">
				<?php previous_posts_link('Newer Entries &raquo;') ?>
		</div><!--.older-->
	</div><!--.oldernewer-->
	
</div><!--/main-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>