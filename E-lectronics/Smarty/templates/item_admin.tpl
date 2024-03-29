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
							
						
						
						
						
						

                        <div style="height:50px;">
						<form name="delete" METHOD="post" >
						
						
						<INPUT TYPE="hidden" NAME="itemId"  VALUE="{$item["itemId"]}">
						<p  class="cart-btn">  <input type="submit" value="Delete item" name ="delete_item" >  </p>
						</form>
						</div>
						
							<p style="margin-top:35px;"><strong>Category: </strong>{$item["category"]}</p>
						</div>
						<h4>Seller : <span > <a href= "Admin/seller={$seller["userId"]}" style="color:#F28123;"> {$seller["username"]} </a></span></h4>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	

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