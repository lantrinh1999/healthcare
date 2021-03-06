<?php
global $wp;
do_action('pveser_header');
$logo = get_field('logo','option');
$top_category = get_field('top_category', 'option');
// dd($top_category);
?>
<body>
	<!-- =====  LODER  ===== -->
	<div class="loder"></div>
	<div class="wrapper">
		<div id="subscribe-me" class="modal animated fade in" role="dialog" data-keyboard="true" tabindex="-1">
			<div class="newsletter-popup">
				<img class="offer" src="/healthcare/wp-content/themes/wp-pveser/assets/images/newsbg.jpg" alt="offer">
				<div class="newsletter-popup-static newsletter-popup-top">
					<div class="popup-text">
						<div class="popup-title">50% <span>off</span></div>
						<div class="popup-desc">
							<div>Sign up and get 50% off your next Order</div>
						</div>
					</div>
					<form onsubmit="return  validatpopupemail();" method="post">
						<div class="form-group required">
							<input type="email" name="email-popup" id="email-popup" placeholder="Enter Your Email" class="form-control input-lg" required />
							<button type="submit" class="btn btn-default btn-lg" id="email-popup-submit">Subscribe</button>
							<label class="checkme">
								<input type="checkbox" value="" id="checkme" />Dont show again</label>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- =====  HEADER START  ===== -->
			<header id="header">
				<div class="header-top">
					<div class="container">
						<div class="row">
							
							<div class="col-sm-12">
								<ul class="header-top-right text-right">
									<li class="account"><a href="login.html">My Account</a></li>
									<li class="sitemap"><a href="#">Sitemap</a></li>
									<li class="cart"><a href="cart_page.html">My Cart</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header">
					<div class="container">
						<nav class="navbar">
							<div class="navbar-header mtb_20"> <a class="navbar-brand" href="<?php echo get_bloginfo('url') ?>"> <img alt="" width="auto" height="60px" style="height: 60px" src="<?php echo !empty($logo) ? $logo : __THEME_HOST . "/images/logovt.png" ?>"> </a> </div>
							<div class="header-right pull-right mtb_50">
								<button class="navbar-toggle pull-left" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
								<div class="shopping-icon">
									<div class="cart-item " data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true" role="button">Item's : <span class="cart-qty">02</span></div>
									<div id="cart-dropdown" class="cart-menu collapse">
										<ul>
											<li>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td class="text-center"><a href="#"><img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
															<td class="text-left product-name"><a href="#">MacBook Pro</a>
																<span class="text-left price">$20.00</span>
																<input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
															</td>
															<td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
														</tr>
														<tr>
															<td class="text-center"><a href="#"><img src="/healthcare/wp-content/themes/wp-pveser/assets/images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
															<td class="text-left product-name"><a href="#">MacBook Pro</a>
																<span class="text-left price">$20.00</span>
																<input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
															</td>
															<td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
														</tr>
													</tbody>
												</table>
											</li>
											<li>
												<table class="table">
													<tbody>
														<tr>
															<td class="text-right"><strong>Sub-Total</strong></td>
															<td class="text-right">$2,100.00</td>
														</tr>
														<tr>
															<td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
															<td class="text-right">$2.00</td>
														</tr>
														<tr>
															<td class="text-right"><strong>VAT (20%)</strong></td>
															<td class="text-right">$20.00</td>
														</tr>
														<tr>
															<td class="text-right"><strong>Total</strong></td>
															<td class="text-right">$2,122.00</td>
														</tr>
													</tbody>
												</table>
											</li>
											<li>
												<form action="http://html.lionode.com/healthcare/hc001/cart_page.html">
													<input class="btn pull-left mt_10" value="View cart" type="submit">
												</form>
												<form action="http://html.lionode.com/healthcare/hc001/checkout_page.html">
													<input class="btn pull-right mt_10" value="Checkout" type="submit">
												</form>
											</li>
										</ul>
									</div>
								</div>
								<div class="main-search pull-right">
									<div class="search-overlay">
										<!-- Close Icon -->
										<a href="javascript:void(0)" class="search-overlay-close"></a>
										<!-- End Close Icon -->
										<div class="container">
											<!-- Search Form -->
											<form role="search" id="searchform" action="http://html.lionode.com/search" method="get">
												<label class="h5 normal search-input-label">Enter keywords To Search Entire Store</label>
												<input value="" name="q" placeholder="Search here..." type="search">
												<button type="submit"></button>
											</form>
											<!-- End Search Form -->
										</div>
									</div>
									<div class="header-search"> <a id="search-overlay-btn"></a> </div>
								</div>
							</div>
							<div class="collapse navbar-collapse js-navbar-collapse pull-right">
								<ul id="menu" class="nav navbar-nav">
									<li> <a href="index.html">Home</a></li>
									<li> <a href="category_page.html">Shop</a></li>
									<li> <a href="blog_page.html">Blog</a></li>
									<li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collection </a>
										<ul class="dropdown-menu mega-dropdown-menu row">
											<li class="col-md-3">
												<ul>
													<li class="dropdown-header">Women's</li>
													<li><a href="#">Unique Features</a></li>
													<li><a href="#">Image Responsive</a></li>
													<li><a href="#">Auto Carousel</a></li>
													<li><a href="#">Newsletter Form</a></li>
													<li><a href="#">Four columns</a></li>
													<li><a href="#">Four columns</a></li>
													<li><a href="#">Good Typography</a></li>
												</ul>
											</li>
											<li class="col-md-3">
												<ul>
													<li class="dropdown-header">Man's</li>
													<li><a href="#">Unique Features</a></li>
													<li><a href="#">Image Responsive</a></li>
													<li><a href="#">Four columns</a></li>
													<li><a href="#">Auto Carousel</a></li>
													<li><a href="#">Newsletter Form</a></li>
													<li><a href="#">Four columns</a></li>
													<li><a href="#">Good Typography</a></li>
												</ul>
											</li>
											<li class="col-md-3">
												<ul>
													<li class="dropdown-header">Children's</li>
													<li><a href="#">Unique Features</a></li>
													<li><a href="#">Four columns</a></li>
													<li><a href="#">Image Responsive</a></li>
													<li><a href="#">Auto Carousel</a></li>
													<li><a href="#">Newsletter Form</a></li>
													<li><a href="#">Four columns</a></li>
													<li><a href="#">Good Typography</a></li>
												</ul>
											</li>
											<li class="col-md-3">
												<ul>
													<li id="myCarousel" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner">
															<div class="item active"> <a href="#"><img src="/healthcare/wp-content/themes/wp-pveser/assets/images/menu-banner1.jpg" class="img-responsive" alt="Banner1"></a></div>
															<!-- End Item -->
															<div class="item"> <a href="#"><img src="/healthcare/wp-content/themes/wp-pveser/assets/images/menu-banner2.jpg" class="img-responsive" alt="Banner1"></a></div>
															<!-- End Item -->
															<div class="item"> <a href="#"><img src="/healthcare/wp-content/themes/wp-pveser/assets/images/menu-banner3.jpg" class="img-responsive" alt="Banner1"></a></div>
															<!-- End Item -->
														</div>
														<!-- End Carousel Inner -->
													</li>
													<!-- /.carousel -->
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
										<ul class="dropdown-menu">
											<li> <a href="contact_us.html">Contact us</a></li>
											<li> <a href="cart_page.html">Cart</a></li>
											<li> <a href="checkout_page.html">Checkout</a></li>
											<li> <a href="product_detail_page.html">Product Detail Page</a></li>
											<li> <a href="single_blog.html">Single Post</a></li>
										</ul>
									</li>
									<li> <a href="about.html">About us</a></li>
								</ul>
							</div>
							<!-- /.nav-collapse -->
						</nav>
					</div>
				</div>
				<div class="header-bottom">
					<div class="container">
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-3">
								<div class="category">
									<div class="menu-bar" data-target="#category-menu,#category-menu-responsive" data-toggle="collapse" aria-expanded="true" role="button">
										<h4 class="category_text">DANH MỤC NỔI BẬT</h4>
										<span class="i-bar"><i class="fa fa-bars"></i></span></div>
									</div>
									<div id="category-menu-responsive" class="navbar collapse " aria-expanded="true" style="" role="button">
										<div class="nav-responsive">
											<ul class="nav  main-navigation collapse in">
												<?php if (!empty($top_category) && is_array($top_category)): ?>
												<?php foreach ($top_category as $topcate): ?>
													<li><a href="<?= get_term_link( $topcate, 'product_cat' ); ?>"><?= get_the_category_by_ID($topcate) ?></a></li>
												<?php endforeach ?> <?php endif ?>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-sm-8 col-md-8 col-lg-9">
									<div class="header-bottom-right offers">
										<div class="marquee"><span><i class="fa fa-circle" aria-hidden="true"></i>It's Sexual Health Week!</span>
											<span><i class="fa fa-circle" aria-hidden="true"></i>Our 5 Tips for a Healthy Summer</span>
											<span><i class="fa fa-circle" aria-hidden="true"></i>Sugar health at risk?</span>
											<span><i class="fa fa-circle" aria-hidden="true"></i>The Olay Ranges - What do they do?</span>
											<span><i class="fa fa-circle" aria-hidden="true"></i>Body fat - what is it and why do we need it?</span>
											<span><i class="fa fa-circle" aria-hidden="true"></i>Can a pillow help you to lose weight?</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</header>
					<!-- =====  HEADER END  ===== -->

					<!-- =====  CONTAINER START  ===== -->

					<div class="container">
						<div class="row ">
							<div id="column-left" class="col-sm-4 col-md-4 col-lg-3 ">
								<div id="category-menu" class="navbar collapse mb_40 hidden-sm-down in" aria-expanded="true" style="" role="button">
									<div class="nav-responsive">
										<ul class="nav  main-navigation collapse in ">
											<?php if (!empty($top_category) && is_array($top_category)): ?>
											<?php foreach ($top_category as $topcate): ?>
												<li><a href="<?= get_term_link( $topcate, 'product_cat' ); ?>"><?= get_the_category_by_ID($topcate) ?></a></li>
											<?php endforeach ?> <?php endif ?>
										</ul>
									</div>
								</div>
							