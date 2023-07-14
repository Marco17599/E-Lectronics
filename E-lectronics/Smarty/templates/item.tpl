<!DOCTYPE html>
<html lang="en">
<head>
 <base href="http://localhost/~marco/E-lectronics/"   >

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single Product</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="Smarty/images/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="Smarty/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="Smarty/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="Smarty/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="Smarty/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="Smarty/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="Smarty/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="Smarty/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="Smarty/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<img src="Smarty/images/logo.png" alt="">
						</div>
						<!-- logo -->

					  <!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="">Home</a>
								</li>

								<li><a href="About">About</a></li>

								<li><a href="Login">Login</a></li>
									
								
								
								<li><a href="Sell">Sell</a></li>
								<li><a href="Items">Shop</a>
									
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="Cart"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" ><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href=""><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Item Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="data:image/jpg;charset=utf8;base64,{$item["image"]}" style="width:400px;height:400px;" >
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{$item["itemName"]}</h3>
						 <p class="single-product-pricing"> Price : ${$item["itemPrice"]}</p>
						
						<h4 >Description</h4>
						<p style = " overflow-y:scroll; overflow-x:hidden; height:120px;">{$item["itemDescription"]}</p>
						
						<div class="single-product-form">
							
						{if in_array($,$cartItems)}
						
						<p  class="cart-btn"><i class="fas fa-shopping-cart"></i> Already in cart</p>
						
						{else}

                        <div style="height:50px;">
						<form name="add" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="{$item["itemId"]}">
						<p  class="cart-btn">  <input type="submit" value="Add to Cart" >  </p>
						</form>
						</div>
						{/if}
							<p><strong>Category: </strong>{$item["category"]}</p>
						</div>
						<h4>Seller : <span > <a href= "Reviews/{$seller["userId"]}" style="color:#F28123;"> {$seller["username"]} </a></span></h4>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						
					</div>
				</div>
			</div>
			{assign var =index value=0}
		<div style = "height:100%; overflow-y:scroll; overflow-x:hidden" >
		{if $items|@count == 0}
			<h2 style="font-size:30px; color: red ;text-align:center" > No items found!</h2>
		{else}
           {while $items|@count > $index}
			
			

          
			<div class="row product-lists" >
				<div class="col-lg-4 col-md-6 text-center {$items[$index]->getCategory()->name} ">
					<div class="single-product-item">
					<a href="Items/{$items[$index]->getItemId()}" >
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$items[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$items[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$items[$index]->getItemPrice()}$ </p></a>
						{if in_array($items[$index],$cartItems)}
						<div style="height:50px;">
						<p  class="cart-btn"><i class="fas fa-shopping-cart"></i> Already in cart</p>
						</div>
						{else}

                        <div style="height:50px;">
						<form name="add" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="{$items[$index]->getItemId()}">
						<p  class="cart-btn">  <input type="submit" value="Add to Cart" >  </p>
						</form>
						</div>
						{/if}
					</div>
				</div>

				{assign var=index value=$index+1}
                           {if $items|@count >$index}
				<div class="col-lg-4 col-md-6 text-center {$items[$index]->getCategory()->name} ">
					<div class="single-product-item">
						<a href="Items/{$items[$index]->getItemId()}">
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$items[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$items[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$items[$index]->getItemPrice()}$ </p></a>{if in_array($items[$index],$cartItems)}
						<div style="height:50px;">
						<p  class="cart-btn"><i class="fas fa-shopping-cart"></i> Already in cart</p>
						</div>
						{else}

                        <div style="height:50px;">
						<form name="add" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="{$items[$index]->getItemId()}">
						<p  class="cart-btn">  <input type="submit" value="Add to Cart" >  </p>
						</form>
						</div>
						{/if}
						
					</div>
				</div>

				{assign var=index value=$index+1}
				{/if}
                           {if $items|@count >$index}
				<div class="col-lg-4 col-md-6 text-center {$items[$index]->getCategory()->name} ">
					<div class="single-product-item">
						<a href="Items/{$items[$index]->getItemId()}" >
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$items[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$items[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$items[$index]->getItemPrice()}$ </p></a>
						{if in_array($items[$index],$cartItems)}
						<div style="height:50px;">
						<p  class="cart-btn"><i class="fas fa-shopping-cart"></i> Already in cart</p>
						</div>
						{else}

                        <div style="height:50px;">
						<form name="add" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="{$items[$index]->getItemId()}">
						<p  class="cart-btn">  <input type="submit" value="Add to Cart" >  </p>
						</form>
						</div>
						{/if}
					</div>
				</div>
				{assign var=index value=$index+1}
				{/if}
				</div>
				
			
                 {/while}
				 {/if}
 

			</div>
		</div>
	</div>
	<!-- end more products -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		
	</div>
	<!-- end logo carousel -->

	 <!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>We are two Information Engineering students Marco Matteucci and Federico D'Alesio.
						We created this web application for a project in order to learn and apply the Web Development concepts and techniques.</p>

                            
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>??/?, Via ?, ?, ?.</li>
							<li>support@E-lectronics.gmail.com</li>
							<li>+39 111 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="">Home</a></li>
							<li><a href="About">About</a></li>
							<li><a href="Login">Login</a></li>
							<li><a href="Sell">Sell</a></li>
							<li><a href="Items">Shop</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscribe</h2>
						<p>Subscribe to our mailing list to get the latest updates.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#"   ><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"   ><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"   ><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"   ><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#"   ><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="Smarty/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="Smarty/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="Smarty/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="Smarty/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="Smarty/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="Smarty/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="Smarty/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="Smarty/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="Smarty/js/sticker.js"></script>
	<!-- main js -->
	<script src="Smarty/js/main.js"></script>

</body>
</html>