<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php
   require('php/connection.php');
   ?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Oblige Society & People Category Bootstrap Responsive web Template| Home :: w3layouts</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Oblige Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	 <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         /* function hideURLbar() {
         	window.scrollTo(0, 1);
         } */
		 
		
      </script>
	  <style>
		img{
			max-width:100%;
		display:block;
		border-radius:2em;
		-webkit-border-radius:2em;
		-moz-border-radius:2em;
		-o-border-radius:2em;
}
	  
	  </style>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

   </head>
   <body>



      <div class="main-top" id="home">
         <!-- header -->
         <div class="headder-top">
            <div class="container-fluid">
               <!-- nav -->
               <nav >
                  <div id="logo">
                     <h1><a class="" href="index.php">Oblige<span>Charity Fund </span></a></h1>
                  </div>
                  <label for="drop" class="toggle">Menu</label>
                  <input type="checkbox" id="drop">
                  <ul class="menu mt-2">
                     <li class="active"><a href="index.php">Home</a></li>
					<!-- <li class="mx-lg-3 mx-md-2 my-md-0 my-1"><a href="registerForm.php">register</a></li>-->
               <?php
   require('php/connection.php');
   session_start();
   if(isset($_SESSION['userid']))
   {
      echo '<li><a href="users/user_index.php">Profile</a></li>';
      echo '<li><a href="php/logout.php">logout</a></li>';
   }
   else{
      echo '<li><a href="#login">LogIN</a></li>';
   }
?>
                     

                     <li><a href="#service">Services</a></li>
                     <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2">
                        <ul>
                           <li><a href="#gallery" class="drop-text">Gallery</a></li>
                           <li><a href="#team" class="drop-text">Volunteers</a></li>
                           <li><a href="#blog" class="drop-text">Blog</a></li>
                        </ul>
                     </li>


                  </ul>
               </nav>
               <!-- //nav -->
            </div>
         </div>
         <!-- //header -->
         <!-- banner -->
         <div class="main-banner">
            <div class="container">
               <div class="style-banner ">
                  <h4 class="mb-1">Better Care and Better World</h4>
                  <h5>You have a good life,some other don't
                  </h5>
               </div>
               <div class="two-demo-button mt-lg-4 mt-3">
                  <p> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
               </div>
               <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                  <a href="#about" class="btn scroll">About Us</a>
               </div>
            </div>
         </div>
      </div>
      <!-- //banner -->
      <section class="three-grids">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                  <div class="img-abt-info1">
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 banner-bottom-grid p-0">
                  <div class="w3layouts-abt-info">
                     <div class="mb-lg-3 mb-md-3 mb-2 abut-headder">
                        <h4>Donation</h4>
                     </div>
                     <p>sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet</p>
                     <div class="view-price mt-3">
                        <a href="#contact" class=" scroll">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                  <div class="img-abt-info2">
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 banner-bottom-grid p-0">
                  <div class="w3layouts-abt-info">
                     <div class="mb-lg-3 mb-md-3 mb-2 abut-headder">
                        <h4>Fundrising</h4>
                     </div>
                     <p>sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet</p>
                     <div class="view-price mt-3">
                        <a href="#contact" class=" scroll">Read More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about -->
	 
     <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="login">
	   <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <form action="php/loginAction.php" method="POST">

            <div class="row">
               <div class="col-lg-5 login col-md-6">
                 <div class="login-form">
    
        <h2 class="text-center display-3">Log In</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required name="uemail">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required name="password">
        </div>
        <div class="form-group">
		<input type="submit" class="btn btn-primary btn-block" value="Log-In">
        </div>
          

    <p class="text-center"><a href="#registerForm">Sign-Up </a></p>
</div>
               </div>
               
            </div>
            </form>
         </div>

	  
	  </section>
     
	  
	  
      <!-- about  -->
      <!--state -->
      <section class="stats py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="stats-info row ">
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
                  <div class="register-left-num ">
                     <div class="count-icon">
                        <span class="fa fa-paw" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">1200</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Donation</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid ">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-smile-o" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">2000</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Volunteers</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-leaf" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">4000</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Rescued</h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 stats-grid">
                  <div class="register-left-num">
                     <div class="count-icon">
                        <span class="fa fa-globe" aria-hidden="true"></span>
                     </div>
                     <div class="counter-number">30+</div>
                     <div class="stat-info pt-lg-3 pt-md-3 pt-sm-3 pt-3">
                        <h4>Countries</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//state -->
      <!-- service -->
      <section class="service py-lg-4 py-md-3 py-sm-3 py-3" id="service">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Our Service</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
            </div>
            <div class="row">
               <div class="col-lg-5 service-two-grids">
                  <div class="color-img-five">
                     <div class="ser-sevice-grid text-center">
                        <h4 class="pb-3">Make A Donation</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non Lorem ipsum dolor sit amet</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7 service-two-grids">
                  <div class="img-cols-grid row">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class=" color-img-one" >
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3"><a href="volunteer.php">Become volunteer</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 ">
                        <div class=" color-img-two">
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3"><a href="php/donation.php">Make A Donation</a></h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 mt-md-4 mt-3">
                        <div class=" color-img-three">
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3">Sponsor a Child</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6 mt-md-4 mt-3">
                        <div class=" color-img-four">
                           <div class="ser-sevice-grid text-center">
                              <h4 class="pb-3">Human Rights</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//service -->
      <!--team -->
      <section class="team py-lg-4 py-md-3 py-sm-3 py-3" id="team">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2 clr">Our Volunteers</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3 sub-colors">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
            </div>
            <div class="row ">
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t1.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Atticus Will</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t2.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Jacob Will</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t3.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Isabella Den</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 team-grid-colum text-center">
                  <img src="images/t4.jpg" alt="" class="img-fluid">
                  <div class="text-grid-gried">
                     <h4>Liam Willson</h4>
                     <ul class="d-flex justify-content-center pt-3 social-icons">
                        <li>
                           <a href="#">
                           <span class="fa fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="mx-3">
                           <a href="#">
                           <span class="fa fa-twitter"></span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="fa fa-google-plus"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//team -->
      <!-- gallery-main -->
      <section class="gallery py-lg-4 py-md-3 py-sm-3 py-3" id="gallery">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Our Gallery</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum 
               </p>
            </div>
            <div class="row gallery-info">
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal1"><img src="images/g1.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal2"><img src="images/g2.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids">
                     <a href="#gal3"><img src="images/g3.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-6 gallery-img-grid p-0">
                  <div class="gallery-grids p-0">
                     <a href="#gal4"><img src="images/g4.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid gallery-mid-two p-0">
                  <div class="gallery-grids">
                     <a href="#gal5"><img src="images/g5.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 gallery-img-grid gallery-mid-two p-0">
                  <div class="gallery-grids">
                     <a href="#gal6"><img src="images/g6.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal7"><img src="images/g7.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal8"><img src="images/g8.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12 gallery-img-three p-0">
                  <div class="gallery-grids">
                     <a href="#gal9"><img src="images/g9.jpg" alt="news image" class="img-fluid"></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--// gallery-main -->
      <!-- popup-->
      <div id="gal1" class="popup-effect">
         <div class="popup">
            <img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal2" class="popup-effect">
         <div class="popup">
            <img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal3" class="popup-effect">
         <div class="popup">
            <img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal4" class="popup-effect">
         <div class="popup">
            <img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal5" class="popup-effect">
         <div class="popup">
            <img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal6" class="popup-effect">
         <div class="popup">
            <img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal7" class="popup-effect">
         <div class="popup">
            <img src="images/g7.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal8" class="popup-effect">
         <div class="popup">
            <img src="images/g8.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- popup-->
      <div id="gal9" class="popup-effect">
         <div class="popup">
            <img src="images/g9.jpg" alt="Popup Image" class="img-fluid" />
            <a class="close" href="#gallery">&times;</a>
         </div>
      </div>
      <!-- //popup -->
      <!-- //gallery popups -->
      <!-- //gallery -->
      <!-- blog -->
      <section class="blog py-lg-4 py-md-3 py-sm-3 py-3" id="blog">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Latest Blog</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum </p>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-one">
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">Better Care and Better World</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry.Lorem Ipsum has been the industry's standard
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-two ">
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">We Need Your Help For Rescue Child</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard
                  </p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">Better Care and Better World</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-two ">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 mid-text-info">
                  <h4 class="mb-lg-4 mb-3"><a href="#contact">We Need Your Help For Rescue Child</a></h4>
                  <p>Lorem Ipsum is simply text the printing and typesetting standard industry. Lorem Ipsum has been the industry's standard
                  </p>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 busness-tip-one pl-sm-0">
                  <div class="blog-info">
                     <a href="#contact" class="scroll">
                        <ul>
                           <li>JUL</li>
                           <li>15</li>
                        </ul>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //blog -->
      <!-- Info-matter -->
      <section class="info-matter py-lg-4 py-md-3 py-sm-3 py-3" id="info-matter">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
               <div class="col-lg-6 text-sm-center">
                  <img src="images/info.png" alt="" class="img-fluid">
               </div>
               <div class="col-lg-6 info-matter-join mt-lg-4 mt-3">
                  <h5 class="mb-lg-4 mb-3">Are You A Volunteer Ready?</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum 
                  </p>
                  <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum 
                  </p>
                  <div class="view-buttn mt-md-4 mt-sm-4 mt-3">
                     <a href="#contact" class="btn scroll">Join Us</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--// Info-matter-->
      <!-- contact -->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="signup">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-md-4 mb-sm-3 mb-3 mb-2">Sign UP</h3>
            <div class="title-wls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et Lorem ipsum 
               </p>
            </div>
            <div class="row" id="registerForm">
               <div class="col-lg-6 col-md-6 contact-details">
<h2>Register form</h2>
  <form action="php/registerAction.php" method="POST">
  <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
	 <div class="form-group">
      <label>Gender:</label>
      <input type="radio" class="form" id="male" value="male" name="gender"><label> Male</label>
	<input type="radio" class="form" id="female" value="female" name="gender"><label> feMale</label>

	</div>
    
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
	<div class="form-group">
      <label for="email">Mobile Number:</label>	
      <input type="number" class="form-control" id="number" placeholder="Enter Mobile Number" name="number">
    </div>
	<div class="form-group">
	<label>Countries</label>
	
	<select class="form-control" name="country" onchange="sel_country()" id="country">
				<option value="sel_country">Select Country</option>
				<?php 
				
					$select_query="SELECT * FROM countries";
					$result=$con->query($select_query);
  
					while($fetch1=$result->fetch_object())
					{
				?>              
				<option value="<?php echo $fetch1->cont_id;?>"><?php echo $fetch1->name;?></option>
				  
				  <?php }?>
			</select>
	</div>
	<div class="form-group">	
										
							<label for="exampleInputState">State</label>
							<select class="form-control" onchange="sel_state()" id="state" name="state">
								<option value="sel_state">Select Your State</option>
							</select>
						</div>
	
	
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
   
    <input type="submit" class="btn btn-primary" onclick="alertMsg()" value="Submit">
    
    
    
  </form>
               </div>
               <div class="col-lg-6 col-md-6 address-grid text-center">
                  <div class="contact-address-info mb-md-4 mb-3">
                     <h2><a href="index.html">Funding</a></h2>
                  </div>
                  <div class="contact-address-grid mb-3">
                     <h4> Address</h4>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p>Melbourne,south Brisbane,<br>QLD 4101,Aurstralia.</p>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p>+ 1 (234) 567 8901</p>
                  </div>
                  <div class=" footer-contact-list mb-2">
                     <p><a href="mailto:info@example.com">info2@example.com</a></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//contact -->
      <div class="address_mail_footer_grids">
         <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3539.812628729253!2d153.014155!3d-27.4750921!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0835840a2f%3A0xdd5e3f5c208dc0e1!2sMelbourne+St%2C+South+Brisbane+QLD+4101%2C+Australia!5e0!3m2!1sen!2sin!4v1492257477691"></iframe>
      </div>
      <!-- footer -->
      <footer class=" py-3">
         <div class="container">
            <div class="icons mt-3 text-center">
               <ul class="d-flex justify-content-center pb-3 social-icons">
                  <li>
                     <a href="#">
                     <span class="fa fa-facebook-f"></span>
                     </a>
                  </li>
                  <li class="mx-3">
                     <a href="#">
                     <span class="fa fa-twitter"></span>
                     </a>
                  </li>
                  <li class="mr-3">
                     <a href="#">
                     <span class="fa fa-google-plus"></span>
                     </a>
                  </li>
                  <li><a href="#"><span class="fa fa-vk"></span></a></li>
               </ul>
            </div>
         </div>
         <div class="footer-main txt-center">
            <p> 
               © 2019 Oblige. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
         <!-- move icon -->
         <div class="txt-center">
            <a href="#home" class="move-top txt-center mt-3"></a>
         </div>
         <!--//move icon -->
      </footer>
      <!--//footer -->
	  <script>
	   function sel_country(){

//var cert_type = $('#cert_typ').val();
var country=$('#country').val();
//console.log(country);

	$.ajax({
		url: './php/search_state.php',
		type:'POST',
		data:{country:country},
		success:function(result){
			//alert(result);return false;
			  $('#state').html(result);
			 
		 }
	  });
}



	  </script>
   </body>
</html>