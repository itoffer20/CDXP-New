<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seomondo_CDXP
 */

?>

<footer>
	<div class="footer-content">
		<div class="container">
			<section class="footer-sec pb-0">
				<div class="row">
					<div class="col-lg-8">
						<div class="footer-info">
							<div class="row">
								<div class="col-lg-7 col-md-6">
									<?php
									$footer_logo = get_field('footer_logo', 'option');
									if ($footer_logo) { ?>
										<div class="footer-logo mb-4">
											<a href="<?php echo get_site_url(); ?>">
												<img class="logo_dark img-fluid" src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>" />
											</a>
										</div>
									<?php } ?>
									<?php
									$address = get_field('address', 'option');
									if ($address) { ?>
										<div class="f-contact mb-3">
											<?php echo $address; ?>
										</div>
									<?php } ?>
									<?php
									$social_media = get_field('social_media', 'option');
									$contact_number = get_field('contact_number', 'option');
									if ($social_media || $contact_number) {
									?>
										<div class="footer-media">
											<?php
											if ($social_media) {
											?>
												<ul class="social-media d-inline-block mr-4">
													<?php foreach ($social_media as $social) { ?>
														<li>
															<a href="<?php echo esc_url($social['link']); ?>" target="_blank"><i class="<?php echo esc_html($social['name']); ?>"></i></a>
														</li>
													<?php } ?>
												</ul>
											<?php } ?>
											<?php
											if ($contact_number) { ?>
												<a class="call-now btn bg" href="tel:<?php echo $contact_number; ?>">
													<i class="fas fa-phone-volume"></i> <?php echo $contact_number; ?></a>
											<?php } ?>
										</div>
									<?php } ?>
								</div>
								<div class="col-lg-5 col-md-6">
									<?php if (has_nav_menu('quick-links')) { ?>
										<div class="quick-links">
											<?php echo sprintf('<h5>%s</h5>', __('LINKS', 'cdxp'));
											wp_nav_menu(array('theme_location' => 'quick-links', 'container' => false)); ?>
										</div>
									<?php } ?>
								</div>
								<?php
								$certification = get_field('certification', 'option');
								if ($certification) {
									$image = (isset($certification['image'])) ? $certification['image'] : false;
									$content = (isset($certification['content'])) ? $certification['content'] : false;
									if ($image || $content) {
								?>
										<div class="col-lg-12">
											<div class="footer-diamond footer-diamond d-flex align-items-center">
												<?php if ($image) { ?>
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_html($image['alt']); ?>" class="img-fluid">
												<?php } ?>
												<?php echo sprintf('<p class="m-0 ml-4">%s</p>', $content); ?>
											</div>
										</div>
								<?php }
								}
								?>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<?php
						$contact_form = get_field('contact_form', 'option');
						if ($contact_form) {
							$title = (isset($contact_form['title'])) ? $contact_form['title'] : false;
							$form_shortcode = (isset($contact_form['form_shortcode'])) ? $contact_form['form_shortcode'] : false;
							if ($title || $form_shortcode) {
						?>
								<div class="footer-form pl-5">
									<?php if ($title) {
										echo sprintf('<h5>%s</h5>', esc_html($title));
									}
									if ($form_shortcode) {
										echo do_shortcode($form_shortcode);
									}
									?>
								</div>
						<?php }
						} ?>
					</div>
				</div>
			</section>
		</div>
		<?php
		$copyright = get_field('copyright', 'option');
		if ($copyright) { ?>
			<hr>
			<div class="copy-right">
				<div class="container">
					<section class="copy-right-sec text-center pt-1 pb-4">
						<p class="copy-right-text m-0"><?php echo $copyright; ?></p>
					</section>
				</div>
			</div>
		<?php } ?>
		<div id="btn-scrollup" style="display: none;">
			<a title="Go Top" class="scrollup button-circle" href="#"><i class="fas fa-angle-up"></i></a>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>