<!-- =====  HEADER  ===== -->
<?php 
$categories =  get_category($cat);
if ($categories->parent == 0) {
	$id_categoryCurrent = $categories->term_taxonomy_id;
} elseif($categories->parent != 0) {
	$id_categoryCurrent = $categories->parent;
}
// dd($id_categoryCurrent);
?>

<?php get_header() ?>
<?php get_sidebar('category') ?>
<!-- =====  DATA  ===== -->


<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">
	<!-- =====  BANNER STRAT  ===== -->
	<div class="breadcrumb ptb_20">
		<h1>Blog</h1>
		<ul>
			<li><a href="<?= get_bloginfo('url') ?>">Trang chủ</a></li>
			<li class="active">Blog</li>
		</ul>
	</div>
	<!-- =====  BREADCRUMB END===== -->
	<?php
	$i = 1;
	$k = 1;
	$paged = get_query_var( 'paged' );
	$new_offset = ($paged-1)*16+1;
							// var_dump($new_offset);die;
	$query = new WP_Query([
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby' => 'date',
		'cat' => $cat,
		'order' => 'DESC',
		'posts_per_page' => 16,
		'offset' => $new_offset, 
		'paged'=>$paged		
	]);
	?>
	<div class="row">
		<div class="three-col-blog text-left">

			<?php if ($query->have_posts()): ?>
				<?php  while ($query->have_posts()): ?>
					<?php $query->the_post();?>
					<div class="blog-item col-md-6 mb_30">
						<div class="post-format">
							<div class="thumb post-img">
								<a href="single_blog.html"> 
									<img src="/healthcare/wp-content/themes/wp-pveser/assets/images/blog/blog_img_04.jpg"  alt="HealthCare">
								</a>
							</div>
							<div class="post-type">
								<i class="fa fa-music" aria-hidden="true"></i>
							</div>
						</div>
						<div class="post-info mtb_20 ">
							<h3 class="mb_10"> 
								<a href="single_blog.html">Unknown printer took a galley book.</a> 
							</h3>
							<p>Aliquam egestas pellentesque est. Etiam a orci Nulla id enim feugiat ligula ullamcorper scelerisque. Morbi eu luctus nisl.</p>
							<div class="details mtb_20">
								<div class="date pull-left"> 
									<i class="fa fa-calendar" aria-hidden="true"></i>
									11 May 2017 
								</div>
								<div class="more pull-right"> 
									<a href="single_blog.html">
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


