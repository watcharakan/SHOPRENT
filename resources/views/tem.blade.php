
<!DOCTYPE html>
<html>
<head>
@yield("head")


<title>Women's Fashion a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<!-- countdown -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //countdown -->
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
@yield("Bar")
<!-- header -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
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
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="{{ route('login') }}" method="post">
												 {{ csrf_field() }}
													<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-0 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                              </div>
						 <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <br for="password" class="col-md-0 control-label"></br>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control"  placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<br class="sign-up">

						<input type="submit" value="Sign in"/>
						</br>
												</form>
											</div>
										</div>
									</div>

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="{{ route('register') }}" method="post">

												 {{ csrf_field() }}

													<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-0 control-label"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Name"class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
													<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-0 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control"  placeholder="Email" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-0 control-label"></label>

                            <div class="col-md-6">
                                <input id="password" type="password"  placeholder="Password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-0 control-label"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password"  placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
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
	 @if (Auth::guest())
	<script>
		$('#myModal88').modal('show');
	</script>
	  @endif
	<div class="header">
		<div class="container">
			<div class="w3l_login">

				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span></a>

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
			 <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"> </span></a>Login/Register</li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/create?item=">
                                        	Create Selling
                                        </a>
                                    </li>
                                     <li>
                                        <a href="{{route('createselling')}}">
                                        	ข้อมูลส่วนตัว
                                        </a>
                                    </li>
                                    <li>
                       					<a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>


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
						<li class="active"><a href="/Home" class="act">Home</a></li>
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
								<tbody>
								<tr>
                                   <td>
									<div class="col-sm-2">
										<ul class="multi-column-dropdown">
											<h6><li><a href='/dresses'>Dresses</a></li></h6>
											<li><a href='/d_evening'>อีเว้นท์<span>New</span></a></li>
											<li><a href='/d_chiffon'>ชีฟอง</a></li>
											<li><a href='/d_lace'>ลูกไม้</a></li>
											<li><a href='/d_work'>ทำงาน</a></li>

									</ul>
									</div>
									</td>
									<td>
									<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<h6><li><a href='/skirt'>Skirt</a></li></h6>
											<li><a href='/sk_long'>กระโปรงยาว</a></li>
											<li><a href='/sk_jeans'>กระโปรงยีนส์</a></li>
											<li><a href='/sk_short'>กระโปรงสั่น</a></li>
											<li><a href='/sk_buff'>กระโปรงหนัง</a></li>

										</ul>
									</div>
                                    </td>
                                    <td>
									<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<h6><li><a href='/pants'>Pants</a></li></h6>
											<li><a href='/p_legging'>กางเกงเลกกิ้ง</a></li>
											<li><a href='/p_skirt'>กางเกงกระโปรง</a></li>
											<li><a href='/p_short'>กางเกงขาสั่น</a></li>
											<li><a href='/p_jeans'>กางเกงยีนส์</a></li>
											<li><a href='/p_skin'>กางเกงสกินนี้</a></li>


										</ul>
									</div>
                                     </td>
                                     <td>
									<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<h6><li><a href='/mix'>Mix</a></li></h6>
											<li><a href='/m_d_s'>เดรส+กระโปรง<span>New</span></a></li>
											<li><a href='/m_s_s'>เชิ้ต+กระโปรง</a></li>
											<li><a href='/m_s_p'>เชิ้ต+กางเกง</a></li>


										</ul>
									</div>
									</td>
							</tr>

                            <tr>
                            <td>
									<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<h6><li><a href='/bag'>Bag</a></li></h6>
											<li><a href='/b_handbag'>กระเป๋าถือ<span>New</span></a></li>
											<li><a href='/b_mailbag'>กระเป๋าเอกสาร</a></li>
											<li><a href='/b_wallet'>กระเป๋าสตางค์</a></li>
											<li><a href='/b_backpack'>กระเป๋าเป้สะพายหลัง</a></li>
											<li><a href='/b_buff'>กระเป๋าหนัง</a></li>
											<li><a href='/b_phone'>กระเป๋ามือถือ</a></li>
											<li><a href='/b_luggage'>กระเป๋าเดินทาง</a></li>
											<li><a href='/b_multi'>กระเป๋าอื่น</a></li>

										</ul>
									</div>
                            </td>
                            <td>
									<div class="col-sm-3">
											<ul class="multi-column-dropdown">
											<h6><li><a href='/shoes'>Shoes</a></li></h6>
											<li><a href='/s_boot'>รองเท้าบู๊ด<span>New</span></a></li>
											<li><a href='/s_sneakers'>รองเท้าผ้าใบ</a></li>
											<li><a href='/s_heel'>รองเท้าส้นสูง</a></li>
											<li><a href='/s_fashion'>รองเท้าแฟชั่น</a></li>
											<li><a href='/s_other'>รองเท้าอื่นอื่น</a></li>


										</ul>
									</div>
                            </td>
                            <td>
									<div class="col-sm-3"  >
											<ul class="multi-column-dropdown">
											<h6><li><a href='/accessories'>Accessories</a></li></h6>
											<li><a href='/a_jew'>Jewelry</a></li>
											<li><a href='/a_wig'>วิก</a></li>
											<li><a href='/a_cap'>หมวก</a></li>
											<li><a href='/a_eye'>แว่น</a></li>
											<li><a href='/a_acces'>เครื่องประดับ</a></li>
											<li><a href='/a_hair'>ผม</a></li>
											<li><a href='/a_cold'>กันหนาว</a></li>
											<li><a href='/c_other'>อื่นอื่น</a></li>


										</ul>
									</div>
							</td>
                            <td>
									<div class="col-sm-3">
										<div class="w3ls_products_pos">
											<h4>50%<i>Off/-</i></h4>
											<img src="images/1.jpg" alt=" " class="img-responsive" />
										</div>
									</div>
									<div class="clearfix"></div>
								</div>

							</ul>

						</li>
						</td>

						</tr>
						</tbody>
						<li><a href="about.html">ข้อตกลง</a></li>
						<li class="dropdown-toggle">
                                <a href="/create?item=" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                                    ลงสินค้า <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/create?item=">
                                        	Create Selling
                                        </a>
                                    </li>
                                     <li>
                                        <a href="/fix">
                                        	แก้ไขข้อมูลสินค้า
                                        </a>
                                    </li>
                        </ul>




						<li><a href="mail.html">Mail Us</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
@yield("con")

@yield("foot")
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
