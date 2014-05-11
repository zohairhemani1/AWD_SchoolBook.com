<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>::korkster::</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/media.css" type="text/css">
<link rel="stylesheet" href="css/fontello.css" type="text/css">
<link rel="stylesheet" href="css/jquery.sidr.dark.css" type="text/css">



<!--[if lt IE 9]>
			<script src="js/lib/html5shiv.js"></script>
		<![endif]-->
</head>

<body>
<div class="wrapper">
	<div class="header_bg">
        <header>
        <a id="simple-menu" class="icon-menu" href="#sidr"></a>

        <div id="sidr">
          <ul>
            <li class="home"><a href="#">HOME</a></li>
             <li class="to_do"><a href="#">START SELLING</a></li>
              <!-- <li class="bubble"><a href="#"><img src="img/bubble.png" width="24" alt=""></a></li> -->
              <li class="shopping"><a href="#"  data-toggle="modal" data-target="#myModal_2">SIGN IN</a></li>
              <li id="sales"><a href="#" data-toggle="modal" data-target="#myModal_1">JOIN</a></li>
              <!-- <li class="admin"><a href="#">ZOHAIR HEMANI</a></li> -->
          </ul>
		</div>
            <div class="logo"><a href="#"><img src="img/logo.png" width="153" alt=""></a></div>
            <nav class="main_nav">
                <ul>
                    <li class="home"><a href="#">HOME</a></li>
                    <li class="to_do"><a href="#">START SELLING</a></li>
                    <!-- <li class="bubble"><a href="#"><img src="img/bubble.png" width="24" alt=""></a></li> -->
                    <li class="shopping"><a href="#"  data-toggle="modal" data-target="#login">SIGN IN</a></li>
                    <li id="sales"><a href="#" data-toggle="modal" data-target="#register">JOIN</a></li>
                    <!-- <li class="admin"><a href="#">ZOHAIR HEMANI</a></li> -->
                </ul>
            </nav>
        </header>
        <div class="clear"></div>
    </div><!--/.header_bg-->
    
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h1 class="modal-title" id="myModalLabel">Korkster Login</h1>
                    <p>Please Enter valid Id and password for Signin!</p>
                  </div>
                  <div class="modal-body">
              		<form id="login-form" method="post">
                    <div id="error-login"></div>
                    	<input type="text" class="form-control txt_boxes" placeholder="Login Username" name="username-login" id="username-login">
                        <input type="password" class="form-control txt_boxes" placeholder="Password" name="password-login" id="password-login">
						<div id="loading-login"></div>
                        <input type="submit" class="btn_signup" value="login"/>
                        <div class="forg_pass">
                        	<input type="checkbox" name="remember" class="">
                            <p><a href="#">REMEMBER ME</a> / <a href="#">FORGET PASSWORD</a> ?</p>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                     <div class="clearfix"></div>
                  </div>
                  <div class="modal-footer">
                  	<a href="#"><img src="img/join_via_fb.png" width="251" alt="join using facebook"></a>
                    <p>IF PROBLEM SIGNING IN THEN <a href="#">CLICK HERE »</a></p>
                  </div>
                </div>
               
              </div>
</div>
    
    
    
    
    
    
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h1 class="modal-title" id="myModalLabel">User Registration Form</h1>
                    <p>Register here to become a member of our website</p>
                  </div>
                  <div class="modal-body">
              		<form id="signup" method="post">
                    
                    <div id="error"></div>
                    
                    	<input type="text" class="form-control txt_boxes" placeholder="First Name" name="firstName" id="firstName">
                        <input type="text" class="form-control txt_boxes" placeholder="Last Name" name="lastName" id="lastName">
                        <input type="email" class="form-control txt_boxes" placeholder="Email Address" name="email" id="email">
                        <select class="form-control" name="college">
                        	<option value="" selected>College</option>
                            <option value="india">India</option>
                            <option value="australia">Australia</option>
                            <option value="pakistan">Pakistan</option>
                            <option value="sri lanka">Sri Lanka</option>
                        </select>
                        <input type="text" class="form-control txt_boxes" placeholder="Create your Username" name="username" id="username">
                        <input type="password" class="form-control txt_boxes" placeholder="Create a Password" name="password" id="password">
                        <input type="password" class="form-control txt_boxes" placeholder="Confirm Password" name="verifyPassword" id="verifyPassword">
                      
                        
                        <div id="loading"></div>
                        <input type="submit" class="btn_signup" value="submit" />
                        <p class="terms">By signing up, I agree to Korkster <a href="#" class="terms_link">terms of service.</a></p>
                    </form>
                     <div class="clearfix"></div>
                  </div>
                  <div class="modal-footer">
                  	<a href="#"><img src="img/join_via_fb.png" width="251" alt="join using facebook"></a>
                    <p>ALREADY A MEMBER? <a href="#">SIGN IN »</a></p>
                  </div>
                </div>
               
              </div>
</div>
    <article class="content">
    	<div class="content_inner">
            <form method="get" action="#" id="search" name="search">
            	<label for="search">Find Your School</label>
                <div id="tfheader">
		        	<input type="text" class="tftextinput" name="search_text" size="" id="search" placeholder="" onKeyUp="findmatch();" autocomplete="off" >
                     <ul id ="results" name="school">
                        	
                    </ul>
                	<input type="submit" value="Search" class="tfbutton">
                    
                    
                   
                    
					<div class="clear"></div>
				</div>
            </form>
        </div>
        <div class="clear"></div>
    </article>
    <article class="lower_content">
    	<div class="lower_content_inner">
            	<div class="detail">
                	<h2>What is Korkster?</h2>
                    <p>Korkster is a social website that helps students and teachers
                     like you post classifieds related to your school or university.
                     </p>
                     <p>We take multiple security measures to ensure that only legitimate
                      classifieds are shown and spam is minimized.
                      </p>
                      <p>Korkster is safe and simple.</p>
                </div>
                <div class="how_it_works">
                	<h2>How it Works</h2>
                    <ul>
                    	<li class="register">
                        	<img src="img/register.png" width="58" alt="">
                            <p>Register an account</p></figcaption>
                        </li>
                        <li class="post_classified">
                        	<img src="img/post_classified.png" width="65" alt="">
                       		<p>Post a classified<br>related to your school</p>
                         </li>
                        <li class="messege">
                        	<img src="img/messege.png" width="80" alt="">
                            <p>Interested students or teachers will contact you via email.</p>
                        </li>
                        <li class="enjoy">
                        	<img src="img/enjoy.png" width="52" alt="">
                            <p>Enjoy Life</p>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
    </article>
    
    <footer>
    	<div class="footer_inner">
        	<div class="social">
            	<h4>Lets Connect</h4>
                <ul>
                	<li><a class="twitter" href="#">twitter</a></li>
                    <li><a class="fb" href="#">facebook</a></li>
                    <li><a class="pin" href="#">pinterest</a></li>
                    <li><a class="linkedin" href="#">linkedin</a></li>
                    <li><a class="insta" href="#">instagram</a></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="footer_nav">
            	<h4>General</h4>
                <ul>
                	<li class="f_home"><a href="#">Home</a></li>
                    <li class="f_sign"><a href="#">Sign in</a></li>
                    <li class="f_support"><a href="#">Support</a></li>
                </ul>    
                <ul class="second">    
                 	<li class="f_start"><a href="#">Start selling</a></li>
                    <li class="f_join"><a href="#">Join</a></li>
                    <li class="f_contact"><a href="#">Contact us</a></li>
                    
                </ul>
                <div class="clear"></div>
            </div>
            <div class="copyright">
            	<h4 class="f_logo">Korkster</h4>
                	<p>Copyright 2013 Korkster.</p>
					<p>All Rights Reserved</p> 
            </div>
            <div class="clear"></div>
        </div>
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.sidr.min.js"></script>
<script src ="js/register.js"></script>
<script src ="js/functions.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#simple-menu').sidr();
});
</script>

<script src="js/school-list.js"></script>

</body>
</html>
