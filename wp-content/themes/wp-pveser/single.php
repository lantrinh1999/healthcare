<?php if (get_the_category($post->ID)[0]->parent == 0) {
	$category = get_the_category($post->ID)[0];
	$id_categoryCurrent = $category->term_taxonomy_id;
}elseif(get_the_category($post->ID)[0]->parent != 0) {
	$category = get_the_category($post->ID)[0];
	$id_categoryCurrent = $category->parent;
}
$cat_ID = $id_categoryCurrent;
?>
<?php 
$categories=get_categories(
	array( 'parent' => $id_categoryCurrent )
);
?>

<?php get_header(); ?>
<?php the_post() ?>
<?php get_sidebar('category') ?>
<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
	<!-- =====  BANNER STRAT  ===== -->
	<div class="breadcrumb ptb_20">
		<h1 style="display: none"><?= get_the_title() ?></h1>
		<ul>
			<li><a href="<?= get_bloginfo('url') ?>">Trang chủ</a></li>
			<li class="active"><a href="<?= get_category_link($id_categoryCurrent) ?>"><?= $category->name ?></a></li>
			<!-- <li style="display: none" class="active"><?= get_the_title() ?></li> -->
		</ul>
	</div>
	<!-- =====  BREADCRUMB END===== -->
	<div class="row">
		<div class="blog-item listing-effect col-md-12 mb_50">
			<div class="post-format">
				<?php if (has_post_thumbnail()): ?>
					<div class="thumb post-img">
						<a href="<?= get_the_post_thumbnail_url() ?>" title="<?= get_the_title() ?>"> 
							<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>">
						</a>
					</div>
					<?php else: echo ''; endif ?>
					<div class="post-type"> 
						<i style="line-height: 40px;" class="fa fa-picture-o" aria-hidden="true"></i> 
					</div>
				</div>
				<div class="post-info mtb_20 ">
					<h2 class="mb_10"> 
						<a href="javascript:;"><?= get_the_title() ?></a> 
					</h2>
					<div class="post-content">
						<?php the_content() ?> 
					</div>
					<div class="details mtb_20">
						<div class="date"> 
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<span><?= get_the_date() ?></span>
						</div>
					</div>
					<!-- <div class="author-about mt_50">
						<h3 class="author-about-title">About the Author</h3>
						<div class="author mtb_30">
							<div class="author-avatar"> <img alt="" src="images/user1.jpg"></div>
							<div class="author-body">
								<h5 class="author-name"><a href="#">Radley Lobortis</a></h5>
								<div class="author-content mt_10">Vivamus imperdiet ex sed lobortis luctus. Aenean posuere nulla in turluctus. Aenean posuere nulla in tur pis porttitor laoreet. Quisque finibus aliquet purus. Ut et mi eu ante interdum .</div>
							</div>
						</div>
					</div> -->
					<div id="comments" class="comments-area mt_50">
						<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
					</div>
				</div>
			</div>
		</div>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
	</div>
</div>
</div>
<!-- Single Blog  -->
<!-- End Blog   -->
<!-- =====  CONTAINER END  ===== -->
<?php get_footer(); ?>