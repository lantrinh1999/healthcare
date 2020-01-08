<!-- =====  HEADER  ===== -->
<?php 
$category = get_queried_object();
$cat_ID = $category->term_id;
?>

<?php  get_header() ?>
<?php get_sidebar('category') ?>
<!-- =====  DATA  ===== -->


<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
	<!-- =====  BANNER STRAT  ===== -->
	<div class="breadcrumb ptb_20">
		<h1><?= $category->name; ?></h1>
		<ul>
			<li><a href="<?= get_bloginfo('url') ?>">Trang chủ</a></li>
			<li class="active"><?= $category->name; ?></li>
		</ul>
	</div>
	<!-- =====  BREADCRUMB END===== -->
	<?php
	$i = 1;
	$k = 1;
	$paged = get_query_var( 'paged' );
	$count_post = 8;
	$new_offset = ( $paged - 1 ) * $count_post + 1;
	$query = new WP_Query(
		[
			'post_type' => 'post',
			'post_status' => 'publish',
			'orderby' => 'date',
			'cat' => $cat_ID,
			'order' => 'DESC',
			'posts_per_page' => $count_post,
			'offset' => $new_offset, 
			'paged'=>$paged	,	
		]
	);
	?>
	<div class="row">
		<div class="three-col-blog text-left">
			<?php if ($query->have_posts()): ?>
				<?php  while ($query->have_posts()): ?>
					<?php $query->the_post();?>
					<div class="blog-item col-md-6 mb_30">
						<div class="post-format">
							<div class="thumb post-img">
								<a href="<?= get_the_permalink() ?>">
									<?php if (has_post_thumbnail()): ?>
										<img src="<?= get_the_post_thumbnail_url($post->ID) ?>"  alt="<?= get_the_title() ?>">
									<?php else: ?>
										<img src="<?= __THEME_HOST . '/assets/images/default-image.png' ?>"  alt="<?= get_the_title() ?>">
									<?php endif ?>
									
								</a>
							</div>
							<!-- <div>
								<?php //var_dump($post) ?>
							</div> -->
							<!-- <div class="post-type">
								<i class="fa fa-music" aria-hidden="true"></i>
							</div>
 -->						</div>
						<div class="post-info mtb_20 ">
							<h3 class="mb_10"> 
								<a href="<?= get_the_permalink() ?>"><?= get_the_title() ?></a> 
							</h3>
							<p><?= pveser_excerpt() ?></p>
							<div class="details mtb_20">
								<div class="date pull-left"> 
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span><?= get_the_date() ?></span>
								</div>
								<div class="more pull-right"> 
									<a href="<?= get_the_permalink() ?>">
										Xem chi tiết
										<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php else: ?> 
					<p>Không có bài viết!</p>
				<?php endif ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="pagination-nav text-center mtb_20">
			<ul>
				<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
<!-- =====  CONTAINER END  ===== -->


<?php get_footer(); ?>


