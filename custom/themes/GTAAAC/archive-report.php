<?php /* Template Name: Research */ ?>

<?php get_header(); ?>	

	<?php // The loop starts here
	    if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>

	<?php // Get custom meta values 

	    // Hero Banner
	    $banner     = get_post_meta( $post->ID, '_banner_image', true );
	    $bannerurl  = wp_get_attachment_image_src( $banner,'banner', true );
	    $heading    = get_post_meta( $post->ID, '_banner_heading', true );
	    $subheading = get_post_meta( $post->ID, '_banner_subheading', true );
	?>

		<div class="research-hero">
		    <figure style="background-image: url('<?php echo $bannerurl[0] ?>'); background-size: cover;"></figure>
		    <div class="animated fadeInDown">
		        <h1><?php echo $heading; ?></h1>
		        <?php if ($subheading) { ?>
					<h2><?php echo $subheading; ?></h2>
	        	<?php } ?>
		    </div>
		</div>

		<div class="research-container--outer">
			<div class="research-container--inner">
				<?php
							
					$query = new WP_Query( array( 'post_type' => 'report' ) );
				
					if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				
						<?php // Get custom meta values 
							$industries = get_post_meta($post->ID,'_industries',true);
				
							$banner     = get_post_meta( $post->ID, '_banner_image', true );
							$bannerurl  = wp_get_attachment_image_src( $banner,'banner', true );
						?>
				
						<div class="research__single">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<div class="research__blurb">
								<?php the_content(); ?>
							</div>
						</div>
				
				<?php endwhile; endif; ?>
			</div>
		</div>
	
	<?php endwhile; else : ?>
	    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


<?php get_footer(); ?>