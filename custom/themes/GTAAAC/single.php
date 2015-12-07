<?php get_header(); ?>
<section class="block">
<div id="main" role="main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<article>
				<h1><?php the_title(); ?></h1>
				<p class="meta"><?php the_time('l, F j, Y'); ?></p>
				<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
			</article>

		<div class="newer-older">
			<div class="older">
				<p>
					<?php previous_post_link('%link', '&laquo; Previous post') ?>
				</p>
			</div><!--.older-->
			<div class="newer">
				<p>
					<?php next_post_link('%link', 'Next Post &raquo;') ?>
				</p>
			</div><!--.older-->
		</div><!--.newer-older-->

		<?php /*comments_template( '', true );*/ ?>

	<?php endwhile; /* end loop */ ?>
</div><!--/main-->
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>