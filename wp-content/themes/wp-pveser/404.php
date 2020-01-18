
<?php get_header(); ?>

<?php the_post() ?>
<?php get_sidebar('404') ?>
<?php if (is_404()): ?>
	<script type="text/javascript">
		var is_404 = true;
	</script>
<?php endif ?>
<div class="col-sm-8 col-md-8 col-lg-9 mtb_30">

	<!-- =====  BANNER STRAT  ===== -->
	
	<!-- =====  BREADCRUMB END===== -->
	<div class="row not_found">
		<div class="col-md-12 mb_50">
			<div>
				<h1>404</h1>
			</div>
			<div>
				<h2>Page Not Found</h2>
			</div>
			<div>
				Có vẻ như trang bạn đang cố truy cập không còn tồn tại nữa, hoặc có thể nó vừa mới chuyển. 
				<br>
				Bạn có thể bắt đầu lại từ <a href="<?= get_bloginfo('url') ?>">Trang chủ</a> hoặc quay lại <a href="javascript:%20history.go(-1)">trang trước</a>.
			</div>

		</div>
	</div>
</div>
</div>
</div>
<!-- Single Blog  -->
<!-- End Blog   -->
<!-- =====  CONTAINER END  ===== -->


<?php get_footer(); ?>
