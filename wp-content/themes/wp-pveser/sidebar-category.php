
<?php 
$args = [
	'post_type' => 'post',
	'post_status' => 'publish',
	'orderby' => 'date',
	'cat' => $cat_ID,
	'order' => 'DESC',
	'posts_per_page' => 3,
];

$query2 = new WP_Query( $args );

$s_b_ = get_field('sidebar_banner', 'option');

$testimonial = get_field('testimonial', 'option');
?>

<?php if (!empty($s_b_['banner_1'])): ?>
	<div class="left_banner left-sidebar-widget mt_30 mb_50"> 
		<a href="<?= !empty($s_b_['link_1']) ? $s_b_['link_1'] : '#' ?>"><img src="<?= $s_b_['banner_1'] ?>" alt="Left Banner" class="img-responsive" /></a> 
	</div>
<?php endif ?>



<div class="blog-category left-sidebar-widget mb_50">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Chuyên mục bài viết</h2>
	</div>
	<ul>
		<?php wp_list_categories('exclude=4,7&title_li='); ?>
	</ul>
</div>


<?php if ($query2->have_posts()): ?> <div class="left-blog left-sidebar-widget mb_50">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Bài viết mới nhất</h2>
	</div>
	<div id="left-blog">
		<div class="row ">
			<?php  while ($query2->have_posts()): ?>
				<?php $query2->the_post();?>
				<div class="blog-item mb_20">
					<div class="post-format col-xs-4">
						<div class="thumb post-img">
							<a href="<?= get_the_permalink() ?>"> 
								<?php if (has_post_thumbnail()): ?><img src="<?= get_the_post_thumbnail_url($post->ID) ?>"  alt="<?= get_the_title() ?>">
								<?php else: ?>
									<img src="<?= __THEME_HOST . '/assets/images/default-image.png' ?>"  alt="<?= get_the_title() ?>">
								<?php endif ?>
							</a>
						</div>
					</div>
					<div class="post-info col-xs-8 ">
						<h5> 
							<a href="<?= get_the_permalink() ?>"><?= pveser_title() ?></a> 
						</h5>
						<div class="date pull-left"> 
							<i class="fa fa-calendar" aria-hidden="true"></i>
							<?= get_the_date() ?>								
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div> 
<?php endif ?>
<?php wp_reset_postdata(); ?>


</div>