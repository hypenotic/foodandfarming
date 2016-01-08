<?php get_header(); ?>

<div class="small-hero">
    <figure style="background-image: url('banner.jpg'); background-size: cover; background-position: center center;"></figure>
    <div class="animated fadeInDown">
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<section class="block">
<div id="main" role="main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<article>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) { echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
		<?php the_content(); ?>
	</article>
	<?php endwhile; ?>
</div><!--/main-->
<?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
