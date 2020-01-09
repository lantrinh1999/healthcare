<?php 
/* Template Name: Liên hệ */
?>
<!-- =====  HEADER  ===== -->
<?php get_header() ?>
<?php get_sidebar('contact') ?>
<!-- =====  DATA  ===== -->


<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
	<!-- contact  -->
	<div class="row">
		<div class="col-md-4 col-xs-12 contact">
			<div class="location mb_50">
				<?php $address = get_field('address') ?>
				<div class="mb_50">
					<?php if (!empty($address)): ?>
						<h5 class="capitalize mb_20">Địa chỉ</h5>
						<div class="address">
							<!-- <i class="fa  fa-location-arrow"></i> -->
							<?= $address ?>
						</div>
					<?php endif ?>
					<?php $phone = get_field('phone'); ?>
					<?php if (!empty($phone)): ?>
						<div class="call mt_10">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<?= $phone ?>
						</div>
					<?php endif ?>
					<?php $email = get_field('email'); ?>
					<?php if (!empty($email)): ?>
						<div class="email mt_10">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<a href="mailto:<?= $email ?>" target="_top"><?= $email ?></a>
						</div>
					<?php endif ?>
					
				</div>
				
			</div>
		</div>
		<div class="col-md-8 col-xs-12 contact-form mb_50">
			<!-- Contact FORM -->
			<div id="contact_form">
				<?= do_shortcode( '[contact-form-7 id="221" title="Form Liên hệ"]', $ignore_html = false ) ?>
				<!-- <div id="contact_results"></div> -->
			</div>
		</div>
	</div>
	<!-- map  -->
	<?php $map = get_field('map') ?>
	<?php if (!empty($map)): ?>
		<div class="row">
			<div class="col-xs-12 map mb_80">
				<div id="map">
					<?= $map ?>
				</div>
			</div>
		</div>
	<?php endif ?>
</div>
</div>
</div>
</div>
<!-- Single Blog  -->
<!-- End Blog   -->
<!-- =====  CONTAINER END  ===== -->

<!-- =====  FOOTER  ===== -->
<?php get_footer() ?>	
<!-- =====  FOOTER END  ===== -->