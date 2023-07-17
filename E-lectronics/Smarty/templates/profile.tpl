<!DOCTYPE html>
<html lang="en">
<head>

 
<base href="http://{$smarty.server.HTTP_HOST}{$smarty.server.PHP_SELF}">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Profile</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="Smarty/image/png" href="es/favicon.png">
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

								<li class="current-list-item"><a href="Profile"><i class="fas fa-solid fa-user"></i></a></li>
									
								
								
								<li><a href="Sell">Sell</a></li>
								<li ><a href="Items">Shop</a>
									
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="Cart"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" ><i class="fas fa-search"></i></a>
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
							<p>Your Page</p>
							<h1>{$username}</h1>
							<form method = "post" name ="logout">  
							<input type ="submit" name ="logout" value="logout" style ="margin-top:20px;"></a>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- buyedItems -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                       
                        <p style="font-size:30px; color:black; font-weight:bold; text-align:center;"> Buyed Articles</p>
						
                        

						 


						

                        
                    </div>
                </div>
            </div>

			

			
			{assign var =index value=0}
		<div style = "height:100%; overflow-y:scroll; overflow-x:hidden" >
		{if $buyedItems|@count == 0}
			<h2 style="font-size:30px; color: red ;text-align:center" > No items found!</h2>
		{else}
           {while $buyedItems|@count > $index}
			
			

          
			<div class="row product-lists" >
			
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
					
					
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$buyedItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$buyedItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$buyedItems[$index]->getItemPrice()}$ </p> 
						
						<div style="height:50px;">
                        <p>seller : {$buyedItems[$index]->getVenditore()->getUsername()}</p>

                        
						</div>
					</div>
				</div>
				

				{assign var=index value=$index+1}
                           {if $buyedItems|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
					
					
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$buyedItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$buyedItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$buyedItems[$index]->getItemPrice()}$ </p> 
						
						<div style="height:50px;">
                      <p>seller : {$buyedItems[$index]->getVenditore()->getUsername()}</p>

                        
						</div>
					</div>
				</div>

				{assign var=index value=$index+1}
				{/if}
                           {if $buyedItems|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
					
					
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$buyedItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$buyedItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$buyedItems[$index]->getItemPrice()}$ </p> 
						
						<div style="height:50px;">
                        <p>seller : {$buyedItems[$index]->getVenditore()->getUsername()}</p>

                        
						
					</div>
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
	  
	



	
	<!-- end buyedItems -->



	<!-- soldItems -->
	
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                       
                        <p style="font-size:30px; color:black; font-weight:bold; text-align:center;"> Sold Articles</p>
						
                        

						 


						

                        
                    </div>
                </div>
            </div>

			

			
			{assign var =index value=0}
		<div style = "height:100%; overflow-y:scroll; overflow-x:hidden" >
		{if $soldItems|@count == 0}
			<h2 style="font-size:30px; color: red ;text-align:center" > No articles found!</h2>
		{else}
           {while $soldItems|@count > $index}
			
			

          
			<div class="row product-lists" >
			
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
					
					
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$soldItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$soldItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$soldItems[$index]->getItemPrice()}$ </p> 
						
						

                        
						
					</div>
				</div>
				

				{assign var=index value=$index+1}
                           {if $soldItems|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
							<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$soldItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$soldItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$soldItems[$index]->getItemPrice()}$ </p> 
					</div>
				</div>

				{assign var=index value=$index+1}
				{/if}
                           {if $soldItems|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
							<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$soldItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$soldItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$soldItems[$index]->getItemPrice()}$ </p> 
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
	 </div>
	 



	
	<!-- end soldItems -->

	<!-- sellingItems -->
	
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                       
                        <p style="font-size:30px; color:black; font-weight:bold; text-align:center;"> Selling Articles</p>
						
                        

						 


						

                        
                    </div>
                </div>
            </div>

			

			
			{assign var =index value=0}
		<div style = "height:100%; overflow-y:scroll; overflow-x:hidden" >
		{if $sellingItems|@count == 0}
			<h2 style="font-size:30px; color: red ;text-align:center" > No articles found!</h2>
		{else}
           {while $sellingItems|@count > $index}
			
			

          
			<div class="row product-lists" >
			
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
					
					
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$sellingItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$sellingItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$sellingItems[$index]->getItemPrice()}$ </p> 
						
						

                        
						
					</div>
				</div>
				

				{assign var=index value=$index+1}
                           {if $sellingItems|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$sellingItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$sellingItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$sellingItems[$index]->getItemPrice()}$ </p> 
						
						
					</div>
				</div>

				{assign var=index value=$index+1}
				{/if}
                           {if $sellingItems|@count >$index}
				<div class="col-lg-4 col-md-6 text-center  ">
					<div class="single-product-item">
						<div class="product-image">
							<img src="data:image/jpg;charset=utf8;base64,{$sellingItems[$index]->getImage()}" style="width:250px; height:250px;" >
						</div>
						<h3>{$sellingItems[$index]->getItemName()}</h3>
						<p class="product-price"><span>Price</span> {$sellingItems[$index]->getItemPrice()}$ </p> 
						
						
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
	 </div>
	 



	
	<!-- end sellingItems -->

		<!-- end breadcrumb section -->
	
		<!-- logo carousel -->
		<div class="logo-carousel-section">
			<div class="container">
				
			</div>
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
	<!-- modify js -->
	<script src="Smarty/js/modify.js"></script>
	</body>
</html>