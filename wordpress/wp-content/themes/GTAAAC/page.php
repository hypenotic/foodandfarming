<?php get_header(); ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) { echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
		<?php the_content(); ?>
	</article>
	<?php endwhile; ?>
</div><!--/main-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
