<?php
/* Smarty version 4.3.1, created on 2023-07-18 03:00:22
  from '/home/marco/public_html/E-lectronics/Smarty/templates/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b5e426b27465_55388098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4ca22947e1b018173894b47b84ded1ee9dbc4bc' => 
    array (
      0 => '/home/marco/public_html/E-lectronics/Smarty/templates/checkout.tpl',
      1 => 1689604252,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b5e426b27465_55388098 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
 <!--<base href="http://localhost/~marco/E-lectronics/"   >-->
 <base href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_SERVER['PHP_SELF'];?>
">

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Check Out</title>

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
								<li ><a href="Home" >Home</a>
								</li>

								<li><a href="About">About</a></li>

								<li>
								<?php if ($_smarty_tpl->tpl_vars['isIdentified']->value == true) {?>
								<li><a href="Profile"><i class="fas fa-solid fa-user"></i></a></li>
								<?php } else { ?>
							<li>	<a href="Login">Login</a> </li>
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
						<a class="mobile-show search-bar-icon" href="Home" ><i class="fas fa-search"></i></a>
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
						<p>Order recap</p>
						<h1>Check Out </h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Shipping Informations
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
						        	<form name = "shipping" method= "POST" id= "order_details">
						        		<?php if ((isset($_smarty_tpl->tpl_vars['failedCredentials']->value))) {?>
										<p style="color:red; text-align:center;">Check your credentials</p>
										<p>Address </p>
                                        <p><input type="text" placeholder="country" name ="country" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['country'];?>
"></p>
						        		<p><input type="text" placeholder="city" name ="city" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['city'];?>
"></p>
						        		<p><input type="text" placeholder="district" name ="district" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['district'];?>
"></p>
                                        <p><input type="text" placeholder="street" name ="street" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['street'];?>
"></p>
						        		<p><input type="text" placeholder="number" name ="number" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['number'];?>
"></p>
						        		<p><input type="text" placeholder="cap" name ="cap" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['cap'];?>
"></p>

						        	
						        		<p>Card details </p>
						        		
										<p><input type="text" placeholder="cardNumber" name ="cardNumber" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['cardNumber'];?>
"></p>
						        		<p><input type="text" placeholder="ownerName" name ="ownerName" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['ownerName'];?>
"></p>
						        		<p><input type="text" placeholder="ownerLastName" name ="ownerLastName" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['ownerLastName'];?>
"></p>
						        		<p><input type="text" placeholder="CCV" name ="ccv" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['ccv'];?>
"></p>
										<p>expiration date</p>
										<p><input type="date" placeholder="expirationDate" name ="date" value="<?php echo $_smarty_tpl->tpl_vars['failedCredentials']->value['date'];?>
"></p>


										<?php } else { ?>
										<p>Address </p>
                                        <p><input type="text" placeholder="country" name ="country"></p>
						        		<p><input type="text" placeholder="city" name ="city"></p>
						        		<p><input type="text" placeholder="district" name ="district"></p>
                                        <p><input type="text" placeholder="street" name ="street"></p>
						        		<p><input type="text" placeholder="number" name ="number"></p>
						        		<p><input type="text" placeholder="cap" name ="cap"></p>

						        	
						        		<p>Card details </p>
						        		
										<p><input type="text" placeholder="cardNumber" name ="cardNumber"></p>
						        		<p><input type="text" placeholder="ownerName" name ="ownerName"></p>
						        		<p><input type="text" placeholder="ownerLastName" name ="ownerLastName"></p>
						        		<p><input type="text" placeholder="CCV" name ="ccv"></p>
										<p>expiration date</p>
										<p><input type="date" placeholder="expirationDate" name ="date"></p>
										<?php }?>
										<input type="hidden"  name ="price" value = "<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
"></p>

										
						        		
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						   
						   
						 
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>

								<?php
$__section_recap_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['cart']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_recap_0_total = $__section_recap_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_recap'] = new Smarty_Variable(array());
if ($__section_recap_0_total !== 0) {
for ($__section_recap_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_recap']->value['index'] = 0; $__section_recap_0_iteration <= $__section_recap_0_total; $__section_recap_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_recap']->value['index']++){
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_recap']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_recap']->value['index'] : null)]->getItemName();?>
</td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['cart']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_recap']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_recap']->value['index'] : null)]->getItemPrice();?>
</td>
								</tr>
								<?php
}
}
?>
								
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</td>
								</tr>
								<tr>
								<?php if ($_smarty_tpl->tpl_vars['totalPrice']->value > 100) {?> 
								    <td>Shipping</td>
									<td>$0</td>
									<?php } else { ?>
									<td>Shipping</td>
									<td>$20</td>
									<?php }?>
								</tr>
								<tr>
								<?php if ($_smarty_tpl->tpl_vars['totalPrice']->value > 100) {?> 

								   <td>Total</td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value;?>
</td>
									<?php } else { ?>

									<td>Total</td>
									<td>$<?php echo $_smarty_tpl->tpl_vars['totalPrice']->value+20;?>
</td>

									<?php }?>
								</tr>
							</tbody>
						</table>
						<input type="submit" form = "order_details" value = "Place Order" name = "order_details" style="margin-top:15px;">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

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
							<li><a href="Home" >Home</a></li>
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
						<input type="email" placeholder="Email">
							<button ><i class="fas fa-paper-plane"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	
	
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
	<!-- modify js -->
	<?php echo '<script'; ?>
 src="Smarty/js/modify.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
