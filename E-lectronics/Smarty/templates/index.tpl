<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>E-Lectronics</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="Smarty/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="Smarty/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="Smarty/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="Smarty/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="Smarty/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="Smarty/text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="Smarty/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="Smarty/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           
                           <li><a href="#">Home</a></li>
                           <li><a href="#New_Releases">New Releases</a></li>
                           <li><a href="#">Customer Service</a></li>
                           <li><a href="#">Sell</a></li>
                           <li><a href="#">
                              <i  class="fa fa-shopping-cart" style="font-size:24px"; aria-hidden="true" ></i>
                              <span style="font-size:10px">Cart</span></a>
                           </li>
                           <li><a href="#">
                              <i  class="fa fa-user" style="font-size:24px"; aria-hidden="true"></i>
                              <span style="font-size:10px">Login</span></a>
                           </li>
                           
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="Smarty/images/provalogo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="#">Home</a>
                     <a href="#Computer">Computer</a>
                     <a href="#Videogames">Videogames</a>
                     <a href="#Console">Console</a>
                     <a href="#Smartphone">Smartphone</a>
                     <a href="#Wires">Wires</a>
                     <a href="#Other">Other</a>
                     

                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="Smarty/images/toggle-icon.png"></span>
                  
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search E-Lectronics.it">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                    
                   
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your shopping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Selling</h1>
                              <div class="buynow_bt"><a href="#">Sell</a></div>
                           </div>
                        </div>

                  </div>
                  
                   </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- smartphone section start -->

      {foreach from=$array key=k item=v}

      {assign var =index value=0}
      <div class="fashion_section">
      <a name="{$k}"></a>
      {if $k != "New_Releases"}
      <h1 class="fashion_taital">{$k}</h1>
      {else}
      <h1 class="fashion_taital">New Releseas</h1>
      {/if}

      
      
         <div id="{$k}_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
      

            {while $v|@count >$index}
            {if $index == 0}
               <div class="carousel-item active">
            {else}  
               <div class="carousel-item">
            {/if}   
                  <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                        
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">{$v[$index]}</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$</span></p>
                                 <div class="tshirt_img"><img src="Smarty/images/tshirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           {assign var=index value=$index+1}
                           {if $v|@count >$index}
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">{$v[$index]}</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           {assign var=index value=$index+1}
                           {/if}
                           {if $v|@count >$index}
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">{$v[$index]}</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           {assign var=index value=$index+1}
                           {/if}
                        </div>
                     </div>
                  </div>
               </div>
               {/while}
               
            </div>
            
            <a class="carousel-control-prev" href="#{$k}_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#{$k}_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      {/foreach}
      <!-- fashion section end -->









      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="Smarty/images/provalogo.png"></a></div>
           
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Customer Service</a></li>
                  <li><a href ="#">Sell </a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="Smarty/js/jquery.min.js"></script>
      <script src="Smarty/js/popper.min.js"></script>
      <script src="Smarty/js/bootstrap.bundle.min.js"></script>
      <script src="Smarty/js/jquery-3.0.0.min.js"></script>
      <script src="Smarty/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="Smarty/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="Smarty/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>
