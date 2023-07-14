<?php
/* Smarty version 4.3.1, created on 2023-07-14 04:54:51
  from '/home/marco/public_html/E-lectronics/Smarty/templates/reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b0b8fb3c0a56_92983665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '377f4d0bd0d6c31724f954e4e67250788f354ed3' => 
    array (
      0 => '/home/marco/public_html/E-lectronics/Smarty/templates/reviews.tpl',
      1 => 1689303290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b0b8fb3c0a56_92983665 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>News</title>

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
						<p>Seller reviews</p>
						<h1><?php echo $_smarty_tpl->tpl_vars['reviews']->value[0]->getReviewed()->getUsername();?>
</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">



		<?php $_smarty_tpl->_assignInScope('index', 0);?>
		<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value) == 0) {?>
			<h2 style="font-size:30px; color: red ;text-align:center" > No reviews found!</h2>
		<?php } else { ?>
		<h2 style="font-size:30px; text-align:center" >Reviews</h2>
		<div style = "height:100%; overflow-y:scroll; overflow-x:hidden" >
		
           <?php
 while (smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value) > $_smarty_tpl->tpl_vars['index']->value) {?>

          
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
					<?php if ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() <= 2) {?>
						<div class="latest-news-bg red"></div>
						<?php } elseif ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() <= 3) {?>
						<div class="latest-news-bg yellow"></div>
						<?php } else { ?>
						<div class="latest-news-bg green"></div>
						<?php }?>
						<div class="news-text-box">
						
						<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
 while ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() > $_smarty_tpl->tpl_vars['i']->value) {?>
						<i class="fas fa-solid fa-star fa-beat"></i>
						<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
						<?php }?>

							
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getReviewer()->getUsername();?>
</span>
								
							</p>
							<div style = "height:90px; overflow-y:scroll; overflow-x:hidden" >
							<p class="excerpt"><?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getTextOfReview();?>
</p>
							</div>
							
						</div>
					</div>
				</div>

				<?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
                           <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value) > $_smarty_tpl->tpl_vars['index']->value) {?>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<?php if ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() <= 2) {?>
						<div class="latest-news-bg red"></div>
						<?php } elseif ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() <= 3) {?>
						<div class="latest-news-bg yellow"></div>
						<?php } else { ?>
						<div class="latest-news-bg green"></div>
						<?php }?>
						<div class="news-text-box">
							<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
 while ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() > $_smarty_tpl->tpl_vars['i']->value) {?>
						<i class="fas fa-solid fa-star fa-beat"></i>
						<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
						<?php }?>

							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getReviewer()->getUsername();?>
</span>
								
							</p>
								<div style = "height:90px; overflow-y:scroll; overflow-x:hidden" >
							<p class="excerpt"><?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getTextOfReview();?>
</p>
							</div>
						</div>
					</div>
				</div>

				<?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
				<?php }?>
                           <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value) > $_smarty_tpl->tpl_vars['index']->value) {?>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<?php if ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() <= 2) {?>
						<div class="latest-news-bg red"></div>
						<?php } elseif ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() <= 3) {?>
						<div class="latest-news-bg yellow"></div>
						<?php } else { ?>
						<div class="latest-news-bg green"></div>
						<?php }?>
						<div class="news-text-box">

						
						
						 
							<?php $_smarty_tpl->_assignInScope('i', 0);?>
						<?php
 while ($_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getVote() > $_smarty_tpl->tpl_vars['i']->value) {?>
						<i class="fas fa-solid fa-star " ></i>
						<?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
						<?php }?>

							<p class="blog-meta">
								
								<span class="author"><i class="fas fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getReviewer()->getUsername();?>
</span>
							</p>
								<div style = "height:90px; overflow-y:scroll; overflow-x:hidden" >
							<p class="excerpt"><?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getTextOfReview();?>
</p>
							</div>
							
						</div>
					</div>
				</div>
				<?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['index']->value+1);?>
				<?php }?>

			</div>
			<?php }?>

			<?php }?>

			
		</div>
		<section id="review">
		<div class="comment-template" style="margin-top:30px;">
							<h4>Leave a review</h4>
							<p>Review this seller if you have bought something from him</p>
							<form method="POST" name="review"   >
								<p>
									Your rating<input type="number" name = "vote" min="1" max= "5" value= "1" style="margin-left:30px;">
									
								</p>
								<p><textarea name="textOfReview" id="comment" cols="30" rows="10" placeholder="Your Message"></textarea></p>
								<p style="color:red;">your message cannot be empty</p>
								<p><input type="submit" value="Submit"></p>
								
							</form>
						</div>
						</section>
	</div>
	</div>
	<!-- end latest news -->

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
