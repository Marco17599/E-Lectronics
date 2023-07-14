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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
							
						</nav>
						
						<!-- menu end -->
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
						
						<h1>Admin</h1>
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
                    <div class="product-filters">
                       
                        <p style="font-size:30px; color:black; font-weight:bold; text-align:center;"> Check items</p>
						
                        

						 


						

                        
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
			
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
					
					<a href="Admin/item={$items[$index]->getItemId()}"> 
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$items[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$items[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$items[$index]->getItemPrice()}$ </p> </a>
						
						<div style="height:50px;">
                        <form name="delete" METHOD="post">
                        <INPUT TYPE="hidden" NAME="itemId"  VALUE="{$items[$index]->getItemId()}">
                        	<p  class="cart-btn">  <input type="submit" value="Remove item" name ="delete_item"  >  </p>
						
						</div>
						</form>

                        
						
					</div>
				</div>
				

				{assign var=index value=$index+1}
                           {if $items|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
						<a href="Admin/item={$items[$index]->getItemId()}"> 
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$items[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$items[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$items[$index]->getItemPrice()}$ </p> </a>
						
						<div style="height:50px;">
                        <form name="delete" METHOD="post">
                        <INPUT TYPE="hidden" NAME="itemId"  VALUE="{$items[$index]->getItemId()}">
                        	<p  class="cart-btn">  <input type="submit" value="Remove item" name ="delete_item"  >  </p>
						
						</div>
						</form>
					</div>
				</div>

				{assign var=index value=$index+1}
				{/if}
                           {if $items|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
						<a href="Admin/item={$items[$index]->getItemId()}"> 
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$items[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$items[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$items[$index]->getItemPrice()}$ </p> </a>
						
						<div style="height:50px;">
                        <form name="delete" METHOD="post">
                        <INPUT TYPE="hidden" NAME="itemId"  VALUE="{$items[$index]->getItemId()}">
                        	<p  class="cart-btn">  <input type="submit" value="Remove item" name ="delete_item"  >  </p>
						
						</div>
						</form>
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