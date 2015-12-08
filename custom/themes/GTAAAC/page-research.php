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
		        <h1>Lorem ipsum dolor sit amet</h1>
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
				
						<div class="research__single wow fadeIn">
							<!-- <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a> -->
							<div class="research__single__bottom">
								<div class="research__single__image">
									<img src="https://images.unsplash.com/24/SAM_0551.JPG" height="187" width="300" alt="">
								</div>
								<div class="research__single__content">
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
										<a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=GHfoodfarming&related=<?php echo urlencode("coderplus:Wordpress Tips, jQuery and more"); ?>" title="Share on Twitter" rel="nofollow" target="_blank">
											<button class="right-button" alt="Tweet This Report">
												<i class="fa fa-twitter"></i>
											</button>
										</a>
									</div>
								</div>
							</div>
						</div>
				
				<?php endwhile; endif; ?>
			</div>
		</div>

		<section class="research__cta">
			<h2 class="wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s">If you want to learn more about any of our projects...</h2>
			<a href="<?php echo home_url(); ?>/contact"><button class="wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s"> get in touch</button></a>
		</section>
	
	<?php endwhile; else : ?>
	    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


<?php get_footer(); ?>