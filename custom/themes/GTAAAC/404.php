<?php get_header(); ?>
	<div class="small-hero">
	    <figure style="background-image: url('banner.jpg'); background-size: cover; background-position: center center;"></figure>
	    <div class="animated fadeInDown">
	    	<h1>OOPS! THE PAGE YOU'VE REQUESTED IS NOT AVAILABLE.</h1>
	    </div>
	</div>

	<div class="outer-container">
		<div class="inner-container">
			<h2>Try a search:</h2>
	    	<div class="search-error-page">
				<form role="search" method="get" class="search-form-error big-search" action="<?php echo home_url( '/' ); ?>">
					<label>
						<input type="search" class="search-field big-search" placeholder="<?php echo esc_attr_x( 'What are you looking for?', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
					</label>
					<input type="submit" class="error-submit big-search" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
				</form>
	    	</div>
		</div>
	</div>
<?php get_footer(); ?>