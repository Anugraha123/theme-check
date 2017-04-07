<?php
/*
 The template for displaying the footer
*/
?>
		<div id="footer-container">
			<footer id="footer">
				<?php get_dl_footer() ?>
				<div class="row">
					<div class="column small-12 large-6 site-desc-1">
						Dragon Law Limited is neither a firm of solicitors nor a barristers' chambers. We provide self-help sevices in the form indicated on our website.
					</div>
					<div class="column small-6 large-3 site-icons">
						<?php
							getSiteIcons();
							$iconlist = array();
							$iconlist = getSiteIcons();
							foreach ($iconlist as $il) {
								?>
								<a href="<?php echo $il->IUrl; ?>" target="_blank">
									<img src="<?php echo $il->IImage ?>"/>
								</a>
							<?php
							}
						?>
					</div>
					<div class="column small-6 large-3">
						<a href="" class="button contact">Contact us</a>
					</div>
				</div>
			</footer>
		</div>


<?php wp_footer(); ?>
</body>
</html>
