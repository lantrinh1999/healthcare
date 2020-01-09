<?php 
/* Template Name: Trang chủ */
?>
<!-- =====  HEADER  ===== -->
<?php get_header() ?>
<?php get_sidebar('home') ?>
<!-- =====  DATA  ===== -->
<?php 
$slide = get_field('silde');
$tb = get_field('top_banner');
$midb = get_field('mid_banner');
?>


<div id="column-right" class="col-sm-8 col-md-8 col-lg-9 mtb_30">
	<!-- =====  BANNER STRAT  ===== -->
	<?php if (!empty($slide) && is_array($slide) && count($slide) > 0): ?>
	<div class="banner">
		<div class="main-banner owl-carousel">
			<?php foreach ($slide as $slide_): ?>
				<div class="item">
					<a href="<?= $slide_['link'] ?>">
						<img src="<?= $slide_['image'] ?>" class="img-responsive" />
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
<?php endif ?>

<!-- =====  BANNER END  ===== -->
<!-- =====  SUB BANNER  STRAT ===== -->
<div class="row">
	<div class="cms_banner mt_10">
		<div class="col-xs-6 col-sm-12 col-md-6 mt_20">
			<div id="subbanner1" class="sub-hover"> 
				<a href="<?= !empty($tb['link_1']) ? $tb['link_1'] : '#' ?>">
					<img src="<?= !empty($tb['image_1']) ? $tb['image_1'] : '#' ?>" alt="Sub Banner1" class="img-responsive">
				</a>
				<div class="bannertext">
					<h2><?= !empty($tb['title_1']) ? $tb['title_1'] : '#' ?></h2>
					<p class="mt_10"><?= !empty($tb['description_1']) ? $tb['description_1'] : '#' ?></p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-12 col-md-6 mt_20">
			<div id="subbanner2" class="sub-hover"> 
				<a href="<?= !empty($tb['link_2']) ? $tb['link_2'] : '#' ?>">
					<img src="<?= !empty($tb['image_2']) ? $tb['image_2'] : '#' ?>" alt="" class="img-responsive">
				</a>
				<div class="bannertext">
					<h2><?= !empty($tb['title_2']) ? $tb['title_2'] : '#' ?></h2>
					<p class="mt_10"><?= !empty($tb['description_2']) ? $tb['description_2'] : '#' ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- =====  SUB BANNER END  ===== -->
<!-- =====  PRODUCT TAB  ===== -->
<div id="product-tab" class="mt_40">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Home Electronics</h2>
	</div>
	<ul class="nav text-right">
		<li class="active"> 
			<a href="#nArrivals" data-toggle="tab">New Arrivals</a> 
		</li>
		<li>
			<a href="#Bestsellers" data-toggle="tab">Bestsellers</a> 
		</li>
		<li>
			<a href="#Featured" data-toggle="tab">Featured</a> 
		</li>
	</ul>
	<div class="tab-content clearfix box">
		<div class="tab-pane active" id="nArrivals">
			<div class="nArrivals owl-carousel">
				<div class="product-grid">
					<div class="item">
						<div class="product-thumb">
							<div class="image product-imageblock"> 
								<a href="product_detail_page.html"> 
									<img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> 
									<img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> 
								</a> 
							</div>
							<div class="caption product-detail text-left">
								<h6 data-name="product_name" class="product-name mt_20">
									<a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a>
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
								<div class="button-group text-center">
									<div class="wishlist">
										<a href="#"><span>wishlist</span></a>
									</div>
									<div class="quickview">
										<a href="#"><span>Quick View</span></a>
									</div>
									<div class="compare">
										<a href="#"><span>Compare</span></a>
									</div>
									<div class="add-to-cart">
										<a href="#"><span>Add to cart</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="product-thumb">
							<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
							<div class="caption product-detail text-left">
								<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
								<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
								<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
							</span>
							<div class="button-group text-center">
								<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
								<div class="quickview"><a href="#"><span>Quick View</span></a></div>
								<div class="compare"><a href="#"><span>Compare</span></a></div>
								<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="product-grid">
				<div class="item">
					<div class="product-thumb">
						<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
						<div class="caption product-detail text-left">
							<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
							<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
							<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
						</span>
						<div class="button-group text-center">
							<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
							<div class="quickview"><a href="#"><span>Quick View</span></a></div>
							<div class="compare"><a href="#"><span>Compare</span></a></div>
							<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="product-thumb">
					<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
					<div class="caption product-detail text-left">
						<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
					<div class="button-group text-center">
						<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
						<div class="quickview"><a href="#"><span>Quick View</span></a></div>
						<div class="compare"><a href="#"><span>Compare</span></a></div>
						<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="product-grid">
		<div class="item">
			<div class="product-thumb">
				<div class="image product-imageblock"> 
					<a href="product_detail_page.html"> 
						<img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> 
						<img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> 
					</div>
					<div class="caption product-detail text-left">
						<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
					<div class="button-group text-center">
						<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
						<div class="quickview"><a href="#"><span>Quick View</span></a></div>
						<div class="compare"><a href="#"><span>Compare</span></a></div>
						<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="product-thumb  mb_30">
				<div class="image product-imageblock"> 
					<a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
					<div class="caption product-detail text-left">
						<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
					<div class="button-group text-center">
						<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
						<div class="quickview"><a href="#"><span>Quick View</span></a></div>
						<div class="compare"><a href="#"><span>Compare</span></a></div>
						<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="product-grid">
		<div class="item">
			<div class="product-thumb  mb_30">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
				<div class="caption product-detail text-left">
					<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
					<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
					<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
				</span>
				<div class="button-group text-center">
					<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
					<div class="quickview"><a href="#"><span>Quick View</span></a></div>
					<div class="compare"><a href="#"><span>Compare</span></a></div>
					<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="Bestsellers">
	<div class="Bestsellers owl-carousel">
		<div class="product-grid">
			<div class="item">
				<div class="product-thumb  mb_30">
					<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
					<div class="caption product-detail text-left">
						<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
					<div class="button-group text-center">
						<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
						<div class="quickview"><a href="#"><span>Quick View</span></a></div>
						<div class="compare"><a href="#"><span>Compare</span></a></div>
						<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="product-thumb  mb_30">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
				<div class="caption product-detail text-left">
					<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
					<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
					<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
				</span>
				<div class="button-group text-center">
					<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
					<div class="quickview"><a href="#"><span>Quick View</span></a></div>
					<div class="compare"><a href="#"><span>Compare</span></a></div>
					<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane" id="Featured">
	<div class="Featured owl-carousel">
		<div class="product-grid">
			<div class="item">
				<div class="product-thumb  mb_30">
					<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
					<div class="caption product-detail text-left">
						<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
					<div class="button-group text-center">
						<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
						<div class="quickview"><a href="#"><span>Quick View</span></a></div>
						<div class="compare"><a href="#"><span>Compare</span></a></div>
						<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="product-thumb  mb_30">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
				<div class="caption product-detail text-left">
					<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
					<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
					<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
				</span>
				<div class="button-group text-center">
					<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
					<div class="quickview"><a href="#"><span>Quick View</span></a></div>
					<div class="compare"><a href="#"><span>Compare</span></a></div>
					<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
<div class="product-grid">
	<div class="item">
		<div class="product-thumb  mb_30">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
			<div class="caption product-detail text-left">
				<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
			<div class="button-group text-center">
				<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
				<div class="quickview"><a href="#"><span>Quick View</span></a></div>
				<div class="compare"><a href="#"><span>Compare</span></a></div>
				<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
			</div>
		</div>
	</div>
</div>
<div class="item">
	<div class="product-thumb  mb_30">
		<div class="image product-imageblock"> <a href="product_detail_page.html"> <img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> <img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive"> </a> </div>
		<div class="caption product-detail text-left">
			<h6 data-name="product_name" class="product-name mt_20"><a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
		<div class="button-group text-center">
			<div class="wishlist"><a href="#"><span>wishlist</span></a></div>
			<div class="quickview"><a href="#"><span>Quick View</span></a></div>
			<div class="compare"><a href="#"><span>Compare</span></a></div>
			<div class="add-to-cart"><a href="#"><span>Add to cart</span></a></div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- =====  PRODUCT TAB  END ===== -->
<!-- =====  SUB BANNER  STRAT ===== -->
<div class="row">
	<div class="cms_banner mt_40 mb_50">
		<div class="col-xs-12">
			<div id="subbanner3" class="banner sub-hover"> 
				<a href="<?= !empty($midb['link_1']) ? $midb['link_1'] : '#' ?>">
					<img src="<?= !empty($midb['image_1']) ? $midb['image_1'] : '' ?>" alt="Sub Banner3" class="img-responsive">
				</a> 
			</div>
		</div>
	</div>
</div>
<!-- =====  SUB BANNER END  ===== -->
<!-- =====  sale product  ===== -->
<div id="sale-product">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Home Electronics</h2>
	</div>
	<div class="Specials owl-carousel">
		<div class="item product-layout product-list">
			<div class="product-thumb">
				<div class="image product-imageblock">
					<a href="product_detail_page.html">
						<img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive">
						<img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive">
					</a>
				</div>
				<div class="caption product-detail text-left">
					<h6 data-name="product_name" class="product-name">
						<a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a>
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
					<p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
					<div class="timer mt_80">
						<div class="days"></div>
						<div class="hours"></div>
						<div class="minutes"></div>
						<div class="seconds"></div>
					</div>
					<div class="button-group text-center">
						<div class="wishlist">
							<a href="#">
								<span>wishlist</span>
							</a>
						</div>
						<div class="quickview">
							<a href="#">
								<span>Quick View</span>
							</a>
						</div>
						<div class="compare">
							<a href="#">
								<span>Compare</span>
							</a>
						</div>
						<div class="add-to-cart">
							<a href="#">
								<span>Add to cart</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item product-layout product-list">
			<div class="product-thumb">
				<div class="image product-imageblock">
					<a href="product_detail_page.html">
						<img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive">
						<img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive">
					</a>
				</div>
				<div class="caption product-detail text-left">
					<h6 data-name="product_name" class="product-name">
						<a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a>
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
					<p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
					<div class="timer mt_80">
						<div class="days"></div>
						<div class="hours"></div>
						<div class="minutes"></div>
						<div class="seconds"></div>
					</div>
					<div class="button-group text-center">
						<div class="wishlist">
							<a href="#">
								<span>wishlist</span>
							</a>
						</div>
						<div class="quickview">
							<a href="#">
								<span>Quick View</span>
							</a>
						</div>
						<div class="compare">
							<a href="#">
								<span>Compare</span>
							</a>
						</div>
						<div class="add-to-cart">
							<a href="#">
								<span>Add to cart</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item product-layout product-list">
			<div class="product-thumb">
				<div class="image product-imageblock">
					<a href="product_detail_page.html">
						<img data-name="product_image" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive">
						<img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive">
					</a>
				</div>
				<div class="caption product-detail text-left">
					<h6 data-name="product_name" class="product-name">
						<a href="#" title="Casual Shirt With Ruffle Hem">Latin literature from 45 BC, making it over old.</a>
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
					<p class="product-desc mt_20"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go.Cover Flow. Browse through your music collection by flipping..</p>
					<div class="timer mt_80">
						<div class="days"></div>
						<div class="hours"></div>
						<div class="minutes"></div>
						<div class="seconds"></div>
					</div>
					<div class="button-group text-center">
						<div class="wishlist">
							<a href="#">
								<span>wishlist</span>
							</a>
						</div>
						<div class="quickview">
							<a href="#">
								<span>Quick View</span>
							</a>
						</div>
						<div class="compare">
							<a href="#">
								<span>Compare</span>
							</a>
						</div>
						<div class="add-to-cart">
							<a href="#">
								<span>Add to cart</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- =====  sale product end ===== -->
<!-- =====  SUB BANNER  STRAT ===== -->
<div class="row">
	<div class="cms_banner mt_60 mb_50">
		<div class="col-xs-12">
			<div id="subbanner4" class="banner sub-hover"> 
				<a href="<?= !empty($midb['link_2']) ? $midb['link_2'] : '#' ?>">
					<img src="<?= !empty($midb['image_2']) ? $midb['image_2'] : '#' ?>" alt="Sub Banner4" class="img-responsive">
				</a>
				<div class="bannertext"> </div>
			</div>
		</div>
	</div>
</div>
<!-- =====  SUB BANNER END  ===== -->
<!-- =====  product ===== -->
<div class="row">
	<div class="col-md-4">
		<div class="heading-part mb_20 ">
			<h2 class="main_title">Featured</h2>
		</div>
		<div id="featu-pro" class="owl-carousel">
			<ul class="row ">
				<li class="item product-layout-left mb_20">
					<div class="product-list col-xs-4">
						<div class="product-thumb">
							<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg"> </a> </div>
						</div>
					</div>
					<div class="col-xs-8">
						<div class="caption product-detail">
							<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
							<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
							<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
						</span>
					</div>
				</div>
			</li>
			<li class="item product-layout-left mb_20">
				<div class="product-list col-xs-4">
					<div class="product-thumb">
						<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg"> </a> </div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="caption product-detail">
						<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
				</div>
			</div>
		</li>
		<li class="item product-layout-left mb_20">
			<div class="product-list col-xs-4">
				<div class="product-thumb">
					<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg"> </a> </div>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="caption product-detail">
					<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
					<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
					<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
				</span>
			</div>
		</div>
	</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
</div>
</div>
<div class="col-md-4">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">Bestseller</h2>
	</div>
	<div id="bests-pro" class="owl-carousel">
		<ul class="row ">
			<li class="item product-layout-left mb_20">
				<div class="product-list col-xs-4">
					<div class="product-thumb">
						<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2-1.jpg"> </a> </div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="caption product-detail">
						<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
				</div>
			</div>
		</li>
		<li class="item product-layout-left mb_20">
			<div class="product-list col-xs-4">
				<div class="product-thumb">
					<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg"> </a> </div>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="caption product-detail">
					<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
					<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
					<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
				</span>
			</div>
		</div>
	</li>
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
</div>
</div>
<div class="col-md-4">
	<div class="heading-part mb_20 ">
		<h2 class="main_title">New Item’s</h2>
	</div>
	<div id="new-pro" class="owl-carousel">
		<ul class="row ">
			<li class="item product-layout-left mb_20">
				<div class="product-list col-xs-4">
					<div class="product-thumb">
						<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg"> </a> </div>
					</div>
				</div>
				<div class="col-xs-8">
					<div class="caption product-detail">
						<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
						<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
						<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
					</span>
				</div>
			</div>
		</li>
		<li class="item product-layout-left mb_20">
			<div class="product-list col-xs-4">
				<div class="product-thumb">
					<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg"> </a> </div>
				</div>
			</div>
			<div class="col-xs-8">
				<div class="caption product-detail">
					<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
					<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
					<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
				</span>
			</div>
		</div>
	</li>
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product6-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product7-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product8-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product9-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product10-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product1-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product2-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
<ul class="row ">
	<li class="item product-layout-left mb_20">
		<div class="product-list col-xs-4">
			<div class="product-thumb">
				<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product3-1.jpg"> </a> </div>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="caption product-detail">
				<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
				<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
				<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
			</span>
		</div>
	</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product4-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
<li class="item product-layout-left mb_20">
	<div class="product-list col-xs-4">
		<div class="product-thumb">
			<div class="image product-imageblock"> <a href="product_detail_page.html"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5.jpg"> <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/product5-1.jpg"> </a> </div>
		</div>
	</div>
	<div class="col-xs-8">
		<div class="caption product-detail">
			<h6 class="product-name"><a href="#">Latin literature from 45 BC, making it over old.</a></h6>
			<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i><i class="fa fa-star fa-stack-x"></i></span> </div>
			<span class="price"><span class="amount"><span class="currencySymbol">$</span>70.00</span>
		</span>
	</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<!-- =====  product end  ===== -->
<?php 
$args = array(
	'post_type'=> 'post',
	'orderby'    => 'ID',
	'post_status' => 'publish',
	'order'    => 'DESC',
	'posts_per_page' => 10 
);
$query = new WP_Query( $args );

?>
<!-- =====  Blog ===== -->
<?php if ($query->have_posts()): ?>
	<div id="Blog" class="mt_40">
		<div class="heading-part mb_20 ">
			<h2 class="main_title">Bài viết mới nhất</h2>
		</div>
		<div class="blog-contain box">
			<div class="blog owl-carousel ">
				<?php  while ($query->have_posts()): ?>
					<?php $query->the_post();?>
					<div class="item">
						<div class="box-holder">
							<div class="thumb post-img">
								<a href="<?= get_the_permalink() ?>"> 
									<?php if (has_post_thumbnail()): ?><img src="<?= get_the_post_thumbnail_url($post->ID) ?>"  alt="<?= get_the_title() ?>">
									<?php else: ?>
										<img src="<?= __THEME_HOST . '/assets/images/default-image.png' ?>"  alt="<?= get_the_title() ?>">
									<?php endif ?>
								</a> 
							</div>
							<div class="post-info mtb_20 ">
								<h6 class="mb_10 text-uppercase"> 
									<a href="<?= get_the_permalink() ?>">
										<?= get_the_title() ?>
									</a> 
								</h6>
								<p><?= pveser_excerpt() ?></p>
								<div class="date-time">
									<div class="day"> 11</div>
									<div class="month">Aug</div>
								</div>
							</div>
						</div>     
					</div>     
				<?php endwhile; ?>
			</div>

		</div>
	</div>
	<!-- =====  Blog end ===== -->
</div>
<?php endif ?>

</div>
</div>
</div>
<!-- =====  CONTAINER END  ===== -->
<!-- =====  FOOTER  ===== -->
<?php get_footer() ?>	
<!-- =====  FOOTER END  ===== -->