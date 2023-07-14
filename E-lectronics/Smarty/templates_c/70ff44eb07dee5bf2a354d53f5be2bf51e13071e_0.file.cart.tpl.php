<?php
/* Smarty version 4.3.1, created on 2023-07-14 03:05:24
  from '/home/marco/public_html/E-lectronics/Smarty/templates/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b09f5409b1b6_00216854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70ff44eb07dee5bf2a354d53f5be2bf51e13071e' => 
    array (
      0 => '/home/marco/public_html/E-lectronics/Smarty/templates/cart.tpl',
      1 => 1689296722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b09f5409b1b6_00216854 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
 <base href="http://localhost/~marco/E-lectronics/"   >

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Cart</title>

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
								<li ><a href="">Home</a>
								</li>

								<li><a href="About">About</a></li>

								<li>
								<?php if ($_smarty_tpl->tpl_vars['isIdentified']->value == true) {?>
								<a href="Profile"><i class="fas fa-solid fa-user"></i></a>
								<?php } else { ?>
								<a href="Login">Login</a>
								<?php }?>
								</li>
									
								
								
								<li><a href="Sell">Sell</a></li>
								<li><a href="Items">Shop</a>
									
								</li>
								<li>
									<div class="header-icons">
									<ul>
										<li class="current-list-item"><a class="shopping-cart"  href="Cart"><i class="fas fa-shopping-cart"></i></a></li>
										<li><a class="mobile-hide search-bar-icon" ><i class="fas fa-search"></i></a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
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
							<input type="text" placeholder="Keywords" id="searchh">
							
							<button type="submit" onclick="Search()" >
							Search <i class="fas fa-search"></i></button>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
								 
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Free shipping on orders over 100$ </p>
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->



	<!-- cart -->

<?php if ((isset($_smarty_tpl->tpl_vars['cart']->value)) && (isset($_smarty_tpl->tpl_vars['totalPrice']->value))) {?>
 
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove">
									</th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									
									
								</tr>
							</thead>
							<?php
$__section_prova_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cart']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_prova_0_total = $__section_prova_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_prova'] = new Smarty_Variable(array());
if ($__section_prova_0_total !== 0) {
for ($__section_prova_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index'] = 0; $__section_prova_0_iteration <= $__section_prova_0_total; $__section_prova_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index']++){
?>
							<tbody>
							 <form name="remove" METHOD="post" >
								<tr class="table-body-row">
									<td class="product-remove">  <input type = "submit" name = "remove" value = "remove">  </td>
									<td class="product-image"><img src="data:image/jpg;charset=utf8;base64,<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index'] : null)]->getImage();?>
" style="width:50;height:50;" ></td>
									<td class="product-name"><?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index'] : null)]->getItemname();?>
</td>
									<td class="product-price">$<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index'] : null)]->getItemPrice();?>
</td>
									<td> <input type = "hidden" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_prova']->value['index'] : null)]->getItemId();?>
" name ="itemId"></td>
									
								</tr>
								</form>
								</tbody>


                                
                               <?php
}
}
?>
							
								
							
						</table>

						<div style="display:flex; align-items:center; justify-content:center; height:115px;">
						<form METHOD="post" name = "clear">
							<input type = "submit" name = "clear" value = "clear cart"  class="boxed-btn" />
							
							</form>
							</div>
					</div>
				</div>
				

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</td>
								</tr>
								<?php if ($_smarty_tpl->tpl_vars['totalPrice']->value >= 100) {?>

								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$0</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</td>
								</tr>

								<?php } else { ?>

								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>$20</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value+20;?>
</td>
								</tr>
								

								<?php }?>
								
							</tbody>
							
						</table>
						
						<div class="cart-buttons">
						
							<a  class="boxed-btn" href="Checkout" class="boxed-btn black">Check Out</a>
							
							
							
						</div>
						
					</div>

				
				</div>
				
				
			</div>
		</div>
	</div>
	<?php } else { ?>
	<p style="text-align:center; font-size:large; color:red;"> No items found in your cart</p>
	<?php }?>
	<!-- end cart -->

	<!-- logo carousel -->
	

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
	<?php echo '<script'; ?>
 src="Smarty/js/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
	<!-- bootstrap -->
	<?php echo '<script'; ?>
 src="Smarty/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- count down -->
	<?php echo '<script'; ?>
 src="Smarty/js/jquery.countdown.js"><?php echo '</script'; ?>
>
	<!-- isotope -->
	<?php echo '<script'; ?>
 src="Smarty/js/jquery.isotope-3.0.6.min.js"><?php echo '</script'; ?>
>
	<!-- waypoints -->
	<?php echo '<script'; ?>
 src="Smarty/js/waypoints.js"><?php echo '</script'; ?>
>
	<!-- owl carousel -->
	<?php echo '<script'; ?>
 src="Smarty/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<!-- magnific popup -->
	<?php echo '<script'; ?>
 src="Smarty/js/jquery.magnific-popup.min.js"><?php echo '</script'; ?>
>
	<!-- mean menu -->
	<?php echo '<script'; ?>
 src="Smarty/js/jquery.meanmenu.min.js"><?php echo '</script'; ?>
>
	<!-- sticker js -->
	<?php echo '<script'; ?>
 src="Smarty/js/sticker.js"><?php echo '</script'; ?>
>
	<!-- main js -->
	<?php echo '<script'; ?>
 src="Smarty/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
