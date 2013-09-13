	</section>

		<footer> 
			<section class="block clear">
					<div class="footer-column-wide">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer - Description') ) : ?>
						<?php endif; ?>
					</div>
					<div class="footer-column">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer - Contact') ) : ?>
						<?php endif; ?>
					</div>
					<div class="footer-column-last">
						<h3>Follow Us</h3>
						<ul>
                        	<li>Food and Farming <br /> <a href="https://twitter.com/GHfoodfarming" target="_blank">@GHFoodFarming</a></li>
                        	<li>GTAAAC <br /> <a href="https://twitter.com/GTAAgAction" target="_blank">@GTAAgAction</a></li>
							<!--<li class="facebook"><a href="https://twitter.com/#!/GTA__AAC">@GTA__AAC</a></li>
							<li class="twitter"><a href="https://www.facebook.com/group.php?gid=110313392345265&v=wall">facebook</a></li>-->
						</ul>
					</div>
			</section>
			<section class="block clear">
				<span class="left">Copyright <?php echo copyright(); ?>.</span>
				<span class="right">Handmade by <a href="http://www.hypenotic.com" target="_blank">Hypenotic</a></span>
			</section>
		</footer>
	<?php wp_footer(); ?>

</body>
</html>