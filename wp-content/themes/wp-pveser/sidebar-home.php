<?php 
$s_b_ = get_field('sidebar_banner', 'option');
$testimonial = get_field('testimonial', 'option');
$service = get_field('service', 'option');
?>


<?php if (!empty($s_b_['banner_1'])): ?>
	<div class="left_banner left-sidebar-widget mt_30 mb_50"> 
		<a href="<?= !empty($s_b_['link_1']) ? $s_b_['link_1'] : '#' ?>"><img src="<?= $s_b_['banner_1'] ?>" alt="Left Banner" class="img-responsive" /></a> 
	</div>
<?php endif ?>

<?php if (!empty($service) && is_array($service)): ?>
<div class="left-cms left-sidebar-widget mb_50">
	<ul>
		<?php foreach ($service as $sv): ?>
			<li>
				<div class="feature-i-left ptb_40">
					<div class="icon-right">
						<?php if (!empty($sv['icon'])): ?>
							<i class="fa <?= $sv['icon'] ?>"></i>
						<?php endif ?>
					</div>
					<h6><?= !empty($sv['title']) ? $sv['title'] : "" ?></h6>
					<p><?= !empty($sv['description']) ? $sv['description'] : "" ?></p>
				</div>
			</li>	
		<?php endforeach ?>

	</ul>
</div>
<?php endif ?>


<div class="left-special left-sidebar-widget mb_50">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Top Products</h2>
	</div>
	<div id="left-special" class="owl-carousel">

		<ul class="row ">
			<li class="item product-layout-left mb_20">
				<div class="product-list col-xs-4">
					<div class="product-thumb">
						<div class="image product-imageblock"> 
							<a href="product_detail_page.html"> 
								<img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg"> 
								<img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg"> 
							</a> 
						</div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="caption product-detail">
						<h6 class="product-name">
							<a href="#">Latin literature from 45 BC, making it over old.</a>
						</h6>
						<div class="rating"> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-x"></i>
							</span> 
						</div>
						<span class="price">
							<span class="amount">
								<span class="currencySymbol">$</span>70.00
							</span>
						</span>
					</div>
				</div>
			</li>
			<li class="item product-layout-left mb_20">
				<div class="product-list col-xs-4">
					<div class="product-thumb">
						<div class="image product-imageblock"> 
							<a href="product_detail_page.html"> 
								<img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg"> 
								<img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg"> 
							</a> 
						</div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="caption product-detail">
						<h6 class="product-name">
							<a href="#">Latin literature from 45 BC, making it over old.</a>
						</h6>
						<div class="rating"> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-x"></i>
							</span> 
						</div>
						<span class="price">
							<span class="amount">
								<span class="currencySymbol">$</span>70.00
							</span>
						</span>
					</div>
				</div>
			</li>
			<li class="item product-layout-left mb_20">
				<div class="product-list col-xs-4">
					<div class="product-thumb">
						<div class="image product-imageblock"> 
							<a href="product_detail_page.html"> 
								<img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg"> 
								<img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg"> 
							</a> 
						</div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="caption product-detail">
						<h6 class="product-name">
							<a href="#">Latin literature from 45 BC, making it over old.</a>
						</h6>
						<div class="rating"> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-1x"></i>
							</span> 
							<span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-1x"></i>
								<i class="fa fa-star fa-stack-x"></i>
							</span> 
						</div>
						<span class="price">
							<span class="amount">
								<span class="currencySymbol">$</span>70.00
							</span>
						</span>
					</div>
				</div>
			</li>

		</ul>

	</div>
</div>


<?php if (!empty($s_b_['banner_2'])): ?>
	<div class="left_banner left-sidebar-widget mt_30 mb_50">
		<a href="<?= !empty($s_b_['link_2']) ? $s_b_['link_2'] : '#' ?>">
			<img src="<?= $s_b_['banner_2'] ?>" alt="Left Banner" class="img-responsive" />
		</a> 
	</div>
<?php endif ?>


<?php if (!empty($testimonial) && is_array($testimonial)): ?>
<div class="Testimonial testimonial left-sidebar-widget mb_50">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Cảm nhận khách hàng</h2>
	</div>
	<div class="client owl-carousel text-center pt_10">
		<?php foreach ($testimonial as $ttmn_): ?>
			<div class="item client-detail">
				<div class="client-avatar"> 
					<img alt="<?= !empty($ttmn_['title']) ? $ttmn_['title'] : "Title" ?>" src="<?= !empty($ttmn_['image']) ? $ttmn_['image'] : "" ?>"> 
				</div>
				<div class="client-title  mt_30">
					<strong><?= !empty($ttmn_['title']) ? $ttmn_['title'] : "Name" ?></strong>
				</div>
				<div class="client-designation mb_10">
					<?= !empty($ttmn_['position']) ? $ttmn_['position'] : "Position" ?>
				</div>
				<p>
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<?= !empty($ttmn_['content']) ? $ttmn_['content'] : "Lorem ipsum dolor sit amet, volumus oporteat his at sea in Rem ipsum dolor sit amet, sea in odio .." ?>
				</p>
			</div>
		<?php endforeach ?>
	</div>

</div>
<?php endif ?>


<div class="Tags left-sidebar-widget mb_50">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Tags</h2>
	</div>
	<ul>
		<li><a href="#">business</a></li>
		<li><a href="#">clean</a></li>
		<li><a href="#">corporate</a></li>
		<li><a href="#">blog</a></li>
		<li><a href="#">creative</a></li>
		<li><a href="#">ecommerce</a></li>
		<li><a href="#">modern</a></li>
		<li><a href="#">portfolio</a></li>
		<li><a href="#">retina</a></li>
		<li><a href="#">multipurpose</a></li>
		<li><a href="#">photography</a></li>
		<li><a href="#">responsive</a></li>
	</ul>
</div>

</div>