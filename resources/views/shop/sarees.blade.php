<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Women's Fashion a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Sarees :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input name="Email" placeholder="Email Address" type="text" required="">						
													<input name="Password" placeholder="Password" type="password" required="">										
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="#" method="post">			
													<input placeholder="Name" name="Name" type="text" required="">
													<input placeholder="Email Address" name="Email" type="email" required="">	
													<input placeholder="Password" name="Password" type="password" required="">	
													<input placeholder="Confirm Password" name="Password" type="password" required="">
													<div class="sign-up">
														<input type="submit" value="Create Account"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">
								OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">
										Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">Women's Fashion<span>For Fashion Lovers</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart box_1">
				<a href="checkout.html">
					<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					<img src="images/bag.png" alt="" />
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle act" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Clothing</h6>
											<li><a href="dresses.html">Dresses<span>New</span></a></li>
											<li><a href="sweaters.html">Sweaters</a></li>
											<li><a href="skirts.html">Shorts & Skirts</a></li>
											<li><a href="jeans.html">Jeans</a></li>
											<li><a href="shirts.html">Shirts & Tops<span>New</span></a></li>
										</ul>
									</div>
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<h6>Ethnic Wear</h6>
											<li><a href="salwars.html">Salwars</a></li>
											<li><a href="sarees.html">Sarees<span>New</span></a></li>
											<li><a href="products.html"><i>Summer Store</i></a></li>
										</ul>
									</div>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6>Foot Wear</h6>
											<li><a href="sandals.html">Flats</a></li>
											<li><a href="sandals.html">Sandals</a></li>
											<li><a href="sandals.html">Boots</a></li>
											<li><a href="sandals.html">Heels</a></li>
										</ul>
									</div>
									<div class="col-sm-4">
										<div class="w3ls_products_pos">
											<h4>50%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li><a href="mail.html">Mail Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner7" id="home1">
		<div class="container">
			<h2>Women Sarees<span>up to</span> Flat 40% <i>Discount</i></h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Sarees</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- dresses -->
	<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				<div class="col-md-4 w3ls_dresses_grid_left">
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
								  <h4 class="panel-title asd">
									<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>New Arrivals
									</a>
								  </h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								  <div class="panel-body panel_text">
									<ul>
										<li><a href="dresses.html">Dresses</a></li>
										<li><a href="sweaters.html">Sweaters</a></li>
										<li><a href="skirts.html">Shorts & Skirts</a></li>
										<li><a href="jeans.html">Jeans</a></li>
										<li><a href="shirts.html">Shirts</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Foot Wear
									</a>
								  </h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
										<li><a href="sandals.html">Flats</a></li>
										<li><a href="sandals.html">Sandals</a></li>
										<li><a href="sandals.html">Boots</a></li>
										<li><a href="sandals.html">Heals</a></li>
										<li><a href="sandals.html">Shirts</a></li>
									</ul>
								  </div>
								</div>
							  </div>
							</div>
							<ul class="panel_bottom">
								<li><a href="products.html">Summer Store</a></li>
								<li><a href="dresses.html">New In Clothing</a></li>
								<li><a href="sandals.html">New In Shoes</a></li>
								<li><a href="products.html">Latest Watches</a></li>
							</ul>
						</div>
					</div>
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Color</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="ecommerce_color">
								<ul>
									<li><a href="#"><i></i> Red(5)</a></li>
									<li><a href="#"><i></i> Brown(2)</a></li>
									<li><a href="#"><i></i> Yellow(3)</a></li>
									<li><a href="#"><i></i> Violet(6)</a></li>
									<li><a href="#"><i></i> Orange(2)</a></li>
									<li><a href="#"><i></i> Blue(1)</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Size</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a href="#">Medium</a></li>
									<li><a href="#">Large</a></li>
									<li><a href="#">Extra Large</a></li>
									<li><a href="#">Small</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_dresses_grid_right">
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/70.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos1">
								<h3>Yellow <span>Border Ethnic</span> Saree</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/71.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos">
								<h3>Blue <span>Border</span> Saree</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_dresses_grid_right_grid2">
						<div class="w3ls_dresses_grid_right_grid2_left">
							<h3>Showing Results: 0-1</h3>
						</div>
						<div class="w3ls_dresses_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r1.jpg" alt=" " class="img-responsive" />
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Designer Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$420</span> <i class="item_price">$340</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<img src="images/r9.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Wedding Green Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$320</span> <i class="item_price">$250</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<img src="images/r9.jpg" alt=" " class="img-responsive" />
									<img src="images/r1.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Paithani Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$231</span> <i class="item_price">$200</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<img src="images/r9.jpg" alt=" " class="img-responsive" />
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Wedding Green Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$323</span> <i class="item_price">$270</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<img src="images/r9.jpg" alt=" " class="img-responsive" />
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Silk Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$233</span> <i class="item_price">$190</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<img src="images/r1.jpg" alt=" " class="img-responsive" />
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Light Green Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$342</span> <i class="item_price">$270</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<img src="images/r1.jpg" alt=" " class="img-responsive" />
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Silk Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$312</span> <i class="item_price">$212</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
								<div class="dresses_grid_pos">
									<h6>New</h6>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r9.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r1.jpg" alt=" " class="img-responsive" />
									<img src="images/r8.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Black Border Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$234</span> <i class="item_price">$180</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r1.jpg" alt=" " class="img-responsive" />
									<img src="images/r2.jpg" alt=" " class="img-responsive" />
									<img src="images/r3.jpg" alt=" " class="img-responsive" />
									<img src="images/r4.jpg" alt=" " class="img-responsive" />
									<img src="images/r5.jpg" alt=" " class="img-responsive" />
									<img src="images/r6.jpg" alt=" " class="img-responsive" />
									<img src="images/r7.jpg" alt=" " class="img-responsive" />
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal8"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html">Silk Saree</a></h5>
								<div class="simpleCart_shelfItem">
									<p><span>$323</span> <i class="item_price">$250</i></p>
									<p><a class="item_add" href="#">Add to cart</a></p>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<div class="col-md-5 modal_body_left">
											<img src="images/39.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="col-md-7 modal_body_right">
											<h4>a good look women's Long Skirt</h4>
											<p>Ut enim ad minim veniam, quis nostrud 
												exercitation ullamco laboris nisi ut aliquip ex ea 
												commodo consequat.Duis aute irure dolor in 
												reprehenderit in voluptate velit esse cillum dolore 
												eu fugiat nulla pariatur. Excepteur sint occaecat 
												cupidatat non proident, sunt in culpa qui officia 
												deserunt mollit anim id est laborum.</p>
											<div class="rating">
												<div class="rating-left">
													<img src="images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="images/star.png" alt=" " class="img-responsive" />
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="modal_body_right_cart simpleCart_shelfItem">
												<p><span>$320</span> <i class="item_price">$250</i></p>
												<p><a class="item_add" href="#">Add to cart</a></p>
											</div>
											<h5>Color</h5>
											<div class="color-quality">
												<ul>
													<li><a href="#"><span></span>Red</a></li>
													<li><a href="#" class="brown"><span></span>Yellow</a></li>
													<li><a href="#" class="purple"><span></span>Purple</a></li>
													<li><a href="#" class="gray"><span></span>Violet</a></li>
												</ul>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModal8">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="images/69.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>a good look women's Silk Saree</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$320</span> <i class="item_price">$250</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span>Red</a></li>
									<li><a href="#" class="brown"><span></span>Yellow</a></li>
									<li><a href="#" class="purple"><span></span>Purple</a></li>
									<li><a href="#" class="gray"><span></span>Violet</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="w3l_related_products">
		<div class="container">
			<h3>Related Products</h3>
			<ul id="flexiselDemo2">			
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/51.jpg" alt=" " class="img-responsive" />
								<img src="images/41.jpg" alt=" " class="img-responsive" />
								<img src="images/27.jpg" alt=" " class="img-responsive" />
								<img src="images/28.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.html">Long Purple Skirts</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/41.jpg" alt=" " class="img-responsive" />
								<img src="images/27.jpg" alt=" " class="img-responsive" />
								<img src="images/28.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.html">Black Shorts</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$432</span> <i class="item_price">$323</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/27.jpg" alt=" " class="img-responsive" />
								<img src="images/28.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.html">White Skirts</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$323</span> <i class="item_price">$310</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/41.jpg" alt=" " class="img-responsive" />
								<img src="images/27.jpg" alt=" " class="img-responsive" />
								<img src="images/28.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.html">Long Skirts</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$256</span> <i class="item_price">$200</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //dresses -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="mail.html">Contact Us</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li><a href="faq.html">FAQ's</a></li>
						<li><a href="products.html">Special Products</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="dresses.html">Dresses</a></li>
						<li><a href="sweaters.html">Sweaters</a></li>
						<li><a href="shirts.html">Shirts</a></li>
						<li><a href="sarees.html">Sarees</a></li>
						<li><a href="skirts.html">Shorts & Skirts</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="products.html">Summer Store</a></li>
						<li><a href="checkout.html">My Cart</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2016 Women's Fashion. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>