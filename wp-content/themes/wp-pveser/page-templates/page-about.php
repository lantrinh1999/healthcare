<?php 
/* Template Name: Giới thiệu */

?>
<!-- =====  HEADER  ===== -->
<?php get_header() ?>
<?php get_sidebar('about') ?>
<!-- =====  DATA  ===== -->
<?php 
$banner_about = get_field('banner');
$title_about = get_field('title');
$content_about = get_field('content');
$wwd = get_field('wwd');
$skill = get_field('skill');
$cr = get_field('creative');
?>

<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
	<!-- about  -->
	<div class="row">
		<?php if (!empty($banner_about)): ?>
			<div class="col-md-12">
				<figure> 
					<img src="<?= $banner_about ?>" alt=""> 
				</figure>
			</div>
		<?php endif ?>
		<div class="col-md-12">
			<div class="about-text">
				<?php if (!empty($title_about)): ?>
					<div class="about-heading-wrap">
						<h2 class="about-heading mb_20 mt_40 ptb_10">
							<?= $title_about ?>
						</h2>
					</div>
				<?php endif ?>
				<?php if (!empty($content_about)): ?>
					<div>
						<?= $content_about ?>
					</div>
				<?php endif ?>
				<button type="button" class="btn mt_30">HIRE ME</button>
			</div>
		</div>
	</div>
	<!-- =====  product ===== -->
	<div class="row">
		<?php if ((int)$wwd['show'] == 1): ?>
			<div class="col-md-6">
				<div class="heading-part mb_20 mt_40">
					<h2 class="main_title"><?= !empty($wwd['title'])  ? $wwd['title'] : '' ?></h2>
				</div>
				<?php if (!empty($wwd['block']) && is_array($wwd['block'])): ?>
				<div class="panel-group" id="accordion">
					<?php $count = 0; ?>
					<?php foreach ($wwd['block'] as $ww): ?>
						<?php $count++; ?>
						<div class="panel panel-default pull-left">
							<div class="panel-heading">
								<h4 style="display: block;" class="panel-title"> <a style="display: block;" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $count ?>"><?= $ww['title'] ?></a> </h4>
							</div>
							<div id="collapse<?= $count ?>" class="panel-collapse collapse <?= $count == 1 ? 'in' : '' ?>">
								<div class="panel-body">
									<?= $ww['content'] ?>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
			<?php endif ?>
			
		</div>
	<?php endif ?>
	<?php if ((int) $skill['show']  == 1): ?>
		<div class="col-md-6">
			<div class="heading-part mb_20 mt_40 ">
				<h2 class="main_title"><?= $skill['title'] ?></h2>
			</div>
			<?php if (!empty($skill['block'])): ?>
				<div id="p_line">
					<?php foreach ($skill['block'] as $sk): ?>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="<?= $sk['percent'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $sk['percent'] ?>%; <?= !empty($sk['color']) ? ' background-color: ' . $sk['color'] . ' !important;' : '' ?>"> 
								<span class="sr-only"><?= $sk['percent'] ?>% Complete</span> 
							</div>
							<span class="progress-type"><?= $sk['title'] ?></span>
							<span class="progress-completed"><?= $sk['percent'] ?>%</span> 

						</div>
					<?php endforeach ?>

				</div>
			<?php endif ?>

		</div>
	<?php endif ?>

</div>
<!-- =====  end  ===== -->
<!--Team Carousel -->
<?php if (!empty($cr) && is_array($cr)): ?>
<div class="heading-part mb_10">
	<h2 class="main_title mt_50"><?= !empty(get_field('title_cr')) ? get_field('title_cr') : 'Title' ?></h2>
</div>
<?php if (!empty($cr) && is_array($cr)): ?>
<div class="team_grid box">

	<div class="team3col  owl-carousel">
		<?php foreach ($cr as $mem): ?>
			<div class="item team-detail">
				<div class="team-item-img"> 
					<img src="<?= !empty($mem['image']) ? $mem['image'] : __THEME_HOST . '/assets/images/avatar-default.png' ?>" alt="" /> 
				</div>
				<div class="team-designation mt_20"><?= $mem['position'] ?></div>
				<h4 class="team-title  mtb_10"><?= $mem['name'] ?></h4>
				<?= $mem['description'] ?>
				<ul class="social mt_20 mb_80">
					<?php if ($mem['facebook']): ?>
						<li><a href="<?= $mem['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php endif ?>
					<?php if ($mem['twitter']): ?>
						<li><a href="<?= $mem['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php endif ?>
				</ul>
			</div>
		<?php endforeach ?>
	</div>

	<!--End Team Carousel -->
</div>
<?php endif ?>
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