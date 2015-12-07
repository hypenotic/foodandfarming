<?php /* Template Name: Research */ ?>

<?php get_header(); ?>	

	<?php // The loop starts here
	    if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>

	<?php // Get custom meta values 

    	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
	?>

		<div class="research-hero">
		    <figure style="background-image: url('https://images.unsplash.com/24/SAM_0551.JPG'); background-size: cover; background-position: center center;"></figure>
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
				
							$pdflink     = get_post_meta( $post->ID, '_meta_downloadlink', true );
							$contact     = get_post_meta( $post->ID, '_meta_contacttext', true );
							$contactL     = get_post_meta( $post->ID, '_meta_contactlink', true );
						?>
				
						<div class="research__single">
							<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
							<div class="research__blurb">
								<?php the_content(); ?>
							</div>
							<div class="research__buttons">
								<a href="<?php echo $pdflink; ?>">
									<button>
										Download Report
									</button>
								</a>
								<a href="<?php echo $contactL; ?>">
									<button>
										<?php echo $contact; ?>
									</button>
								</a>
							</div>
						</div>
				
				<?php endwhile; endif; ?>
			</div>
		</div>
	
	<?php endwhile; else : ?>
	    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


<?php get_footer(); ?>