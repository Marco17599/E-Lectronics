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
						<h1>{$reviews[0]->getReviewed()->getUsername()}</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">



		{assign var =index value=0}
		{if $reviews|@count == 0}
			<h2 style="font-size:30px; color: red ;text-align:center" > No reviews found!</h2>
		{else}
		<h2 style="font-size:30px; text-align:center" >Reviews</h2>
		<div style = "height:100%; overflow-y:scroll; overflow-x:hidden" >
		
           {while $reviews|@count > $index}

          
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
					{if $reviews[$index]->getVote() <=2}
						<div class="latest-news-bg red"></div>
						{elseif $reviews[$index]->getVote() <=3 }
						<div class="latest-news-bg yellow"></div>
						{else}
						<div class="latest-news-bg green"></div>
						{/if}
						<div class="news-text-box">
						
						{assign var = i value = 0}
						{while $reviews[$index]->getVote() > $i}
						<i class="fas fa-solid fa-star fa-beat"></i>
						{assign var=i value=$i+1}
						{/while}
							
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> {$reviews[$index]->getReviewer()->getUsername()}</span>
								
							</p>
							<div style = "height:90px; overflow-y:scroll; overflow-x:hidden" >
							<p class="excerpt">{$reviews[$index]->getTextOfReview()}</p>
							</div>
							
						</div>
					</div>
				</div>

				{assign var=index value=$index+1}
                           {if $reviews|@count >$index}
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						{if $reviews[$index]->getVote() <=2}
						<div class="latest-news-bg red"></div>
						{elseif $reviews[$index]->getVote() <=3 }
						<div class="latest-news-bg yellow"></div>
						{else}
						<div class="latest-news-bg green"></div>
						{/if}
						<div class="news-text-box">
							{assign var = i value = 0}
						{while $reviews[$index]->getVote() > $i}
						<i class="fas fa-solid fa-star fa-beat"></i>
						{assign var=i value=$i+1}
						{/while}
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> {$reviews[$index]->getReviewer()->getUsername()}</span>
								
							</p>
								<div style = "height:90px; overflow-y:scroll; overflow-x:hidden" >
							<p class="excerpt">{$reviews[$index]->getTextOfReview()}</p>
							</div>
						</div>
					</div>
				</div>

				{assign var=index value=$index+1}
				{/if}
                           {if $reviews|@count >$index}
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						{if $reviews[$index]->getVote() <=2}
						<div class="latest-news-bg red"></div>
						{elseif $reviews[$index]->getVote() <=3 }
						<div class="latest-news-bg yellow"></div>
						{else}
						<div class="latest-news-bg green"></div>
						{/if}
						<div class="news-text-box">

						
						
						 
							{assign var = i value = 0}
						{while $reviews[$index]->getVote() > $i}
						<i class="fas fa-solid fa-star " ></i>
						{assign var=i value=$i+1}
						{/while}
							<p class="blog-meta">
								
								<span class="author"><i class="fas fa-user"></i> {$reviews[$index]->getReviewer()->getUsername()}</span>
							</p>
								<div style = "height:90px; overflow-y:scroll; overflow-x:hidden" >
							<p class="excerpt">{$reviews[$index]->getTextOfReview()}</p>
							</div>
							
						</div>
					</div>
				</div>
				{assign var=index value=$index+1}
				{/if}

			</div>
			{/while}
			{/if}

			
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