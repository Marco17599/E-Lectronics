<?php
/* Smarty version 4.3.1, created on 2023-07-17 16:28:31
  from '/home/marco/public_html/E-lectronics/Smarty/templates/reviews_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64b5500f062770_78354454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d1a8c545dd509f30f1de12d3021e67d36e09b2c' => 
    array (
      0 => '/home/marco/public_html/E-lectronics/Smarty/templates/reviews_admin.tpl',
      1 => 1689604096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64b5500f062770_78354454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/marco/public_html/E-lectronics/Smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!DOCTYPE html>
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
	<title>Reviews</title>

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
                
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	
								
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Seller reviews</p>
						<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['reviews']->value) == 0) {?>
						<h1>No reviews found!</h1>
						<?php } else { ?>
						<h1><?php echo $_smarty_tpl->tpl_vars['reviews']->value[0]->getReviewed()->getUsername();?>
</h1>
						<?php }?>
						
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
						<div class="news-text-box" >
						
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
                           
                             <form method="post" name ="delete_review" style="display:flex; align-items:center; justify-content:center">
                            <input type="hidden" name ="reviewId" value = "<?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getReviewId();?>
"
                            <p >  <input class="cart-btn" style="margin-top:20px; align:center " type="submit" value="remove review" name ="remove_review" >  </p>
                            </form>
                         
							
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
                             
                             <form method="post" name ="delete_review" style="display:flex; align-items:center; justify-content:center">
                            <input type="hidden" name ="reviewId" value = "<?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getReviewId();?>
"
                            <p >  <input class="cart-btn" style="margin-top:20px; align:center " type="submit" value="remove review" name ="remove_review" >  </p>
                            </form>
                            
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
                             
                             <form method="post" name ="delete_review" style="display:flex; align-items:center; justify-content:center">
                            <input type="hidden" name ="reviewId" value = "<?php echo $_smarty_tpl->tpl_vars['reviews']->value[$_smarty_tpl->tpl_vars['index']->value]->getReviewId();?>
"
                            <p >  <input class="cart-btn" style="margin-top:20px; align:center " type="submit" value="remove review" name ="remove_review" >  </p>
                            </form>
                            
							
						</div>
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
