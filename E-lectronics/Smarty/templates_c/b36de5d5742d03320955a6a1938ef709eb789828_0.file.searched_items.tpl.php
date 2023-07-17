<?php
/* Smarty version 4.3.1, created on 2023-07-15 22:11:45
  from '/home/marco/public_html/E-lectronics/Smarty/templates/searched_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b2fd815804b4_10720194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36de5d5742d03320955a6a1938ef709eb789828' => 
    array (
      0 => '/home/marco/public_html/E-lectronics/Smarty/templates/searched_items.tpl',
      1 => 1689451904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b2fd815804b4_10720194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/marco/public_html/E-lectronics/Smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
 <base href="http://localhost/~marco/E-lectronics/"   >
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Shop</title>

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

	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>

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

							<?php if ($_smarty_tpl->tpl_vars['isIdentified']->value == true) {?>
								<li><a href="Profile"><i class="fas fa-solid fa-user"></i></a></li>
								<?php } else { ?>
								<li><a href="Login">Login</a></li>
								<?php }?>
									
								
								
								<li><a href="Sell">Sell</a></li>
								<li class="current-list-item"><a href="Items">Shop</a>
									
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
						<p>Most used electronics items</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                   
                </div>
            </div>

			

			
			<?php $_smarty_tpl->_assignInScope('index', 0);?>
		<div style = "height:100%; overflow-y:scroll; overflow-x:hidden" >
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) == 0) {?>
			<h2 style="font-size:30px; color: red ;text-align:center" > No items found!</h2>
		<?php } else { ?>

        <h2 style="font-size:30px; color: black ;text-align:center" > Results for your search </h2>
           <?php
 while (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > $_smarty_tpl->tpl_vars['index']->value) {?>
			
			

          
			<div class="row product-lists" style="margin-top:70px;">
			
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
					
					<a href="Items/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemId();?>
"> 
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getImage();?>
" style="width:250px; height:250px;" >
						</div>
						<h3><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemName();?>
</h3>
						<p class="product-price"><span>Price</span> <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemPrice();?>
$ </p> </a>
						<?php if (in_array($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value],$_smarty_tpl->tpl_vars['cartItems']->value)) {?>
						<div style="height:50px;">
						<p  class="cart-btn"><i class="fas fa-shopping-cart"></i> Already in cart</p>
						</div>
						<?php } else { ?>

                        <div style="height:50px;">
						<form name="add" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemId();?>
">
						<p  class="cart-btn">  <input type="submit" value="Add to Cart" >  </p>
						</form>
						</div>
						<?php }?>
					</div>
				</div>
				

				<?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
                           <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > $_smarty_tpl->tpl_vars['index']->value) {?>
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
						<a href="Items/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemId();?>
"> 
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getImage();?>
" style="width:250px; height:250px;" >
						</div>
						<h3><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemName();?>
</h3>
						<p class="product-price"><span>Price</span> <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemPrice();?>
$ </p> </a>
						<?php if (in_array($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value],$_smarty_tpl->tpl_vars['cartItems']->value)) {?>
						<div style="height:50px;">
						<p  class="cart-btn"><i class="fas fa-shopping-cart"></i> Already in cart</p>
						</div>
						<?php } else { ?>

                        <div style="height:50px;">
						<form name="add" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemId();?>
">
						<p  class="cart-btn">  <input type="submit" value="Add to Cart" >  </p>
						</form>
						</div>
						<?php }?>
					</div>
				</div>

				<?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
				<?php }?>
                           <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > $_smarty_tpl->tpl_vars['index']->value) {?>
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
						<a href="Items/<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemId();?>
"> 
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getImage();?>
" style="width:250px; height:250px;" >
						</div>
						<h3><?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemName();?>
</h3>
						<p class="product-price"><span>Price</span> <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemPrice();?>
$ </p> </a>
						<?php if (in_array($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value],$_smarty_tpl->tpl_vars['cartItems']->value)) {?>
						<div style="height:50px;">
						<p  class="cart-btn"><i class="fas fa-shopping-cart"></i> Already in cart</p>
						</div>
						<?php } else { ?>

                        <div style="height:50px;">
						<form name="add" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['index']->value]->getItemId();?>
">
						<p  class="cart-btn">  <input type="submit" value="Add to Cart" >  </p>
						</form>
						</div>
						<?php }?>
					</div>
				</div>
				<?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
				<?php }?>
				</div>
				
			
                 <?php }?>

				 <?php }?>
 

			</div>
				


			
			
         </div>
      </div>
	  </div>



	
	<!-- end products -->

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
						
							<input type="email" placeholder="Email">
							<button ><i class="fas fa-paper-plane"></i></button>
						
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
	<!-- modify js -->
	<?php echo '<script'; ?>
 src="Smarty/js/modify.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
