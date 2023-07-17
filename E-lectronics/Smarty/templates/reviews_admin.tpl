<!DOCTYPE html>
<html lang="en">
<head>
 <!--<base href="http://localhost/~marco/E-lectronics/"   >-->
 <base href="http://{$smarty.server.HTTP_HOST}{$smarty.server.PHP_SELF}">

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
						{if $reviews|@count == 0}
						<h1>No reviews found!</h1>
						{else}
						<h1>{$reviews[0]->getReviewed()->getUsername()}</h1>
						{/if}
						
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
						<div class="news-text-box" >
						
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
                           
                             <form method="post" name ="delete_review" style="display:flex; align-items:center; justify-content:center">
                            <input type="hidden" name ="reviewId" value = "{$reviews[$index]->getReviewId()}"
                            <p >  <input class="cart-btn" style="margin-top:20px; align:center " type="submit" value="remove review" name ="remove_review" >  </p>
                            </form>
                         
							
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
                             
                             <form method="post" name ="delete_review" style="display:flex; align-items:center; justify-content:center">
                            <input type="hidden" name ="reviewId" value = "{$reviews[$index]->getReviewId()}"
                            <p >  <input class="cart-btn" style="margin-top:20px; align:center " type="submit" value="remove review" name ="remove_review" >  </p>
                            </form>
                            
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
                             
                             <form method="post" name ="delete_review" style="display:flex; align-items:center; justify-content:center">
                            <input type="hidden" name ="reviewId" value = "{$reviews[$index]->getReviewId()}"
                            <p >  <input class="cart-btn" style="margin-top:20px; align:center " type="submit" value="remove review" name ="remove_review" >  </p>
                            </form>
                            
							
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
	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		
	</div>
	<!-- end logo carousel -->

	
	
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