

<html>
	<head>
		<title>My Restaurent</title>
		 <link rel="icon" href="img/logo.png">
		 <link href="css/bootstrap.min.css" rel="stylesheet">
		 <link href="css/agency.min.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
  </head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#top"><img src="img/logo.png" width="150px" height="100px"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


   <header class="masthead" id="top">
   <br><br><br><br><br><br>
      <div class="intro-text">
        <div class="box">
          <div class="intro-lead-in">Welcome to</div>
          <div class="intro-heading text-uppercase"> My Restaurant</div>
        <div class="intro-lead-in">Make your life easy with us...!</div>
        
        <a href="#" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" id="button">Login</a>
      </div>
      </div>
    

    <div class="popup">
      <div class="popup-content">
      <form class="form1" action="php/log.php" method="POST">
        <img src="img/close.png" alt="close" class="close">
        <img src="img/1.png" alt="User">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="Password" placeholder="Enter Password" name="pass">
        <select id="type" name="types">
        	<option value="customer">Customer</option>
        	<option value="merchant">Merchant</option>
        </select>
        <button type="submit" name="sign" value="sign" class="butn">Sign up</button>
         </form>
        <p>Don't have an account? Don't worry</p>
        <button type="button" class="btn1" id="btn1">Register as a Customer</button>
        <button type="button" class="btn2" id="btn2">Register as a Merchant</button>
      </div>
       </div> 
  


  
    <div class="popup2">
      <div class="popup-content2">
      	 <form class="form2" action="php/cus.php" method="POST">
        <img src="img/close.png" alt="close" class="close2">
        <img src="img/1.png" alt="User">
        <input type="text" placeholder="Enter First name" name="fname">
        <input type="text" placeholder="Enter Last name" name="lname">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="Password" placeholder="Enter Password" name="pass">
        <input type="text" placeholder="Enter Contact Number" name="phone">
        <button type="submit" class="butn" name="Submit2" value="submit">Register</button>
        <button type="reset" class="butn" name="clear" value="Clear all">Clear</button>
        <button type="button" id="back2" class="butn" name="back2" value="back" >Back</button>
        </form>
      </div>
       </div> 
   


  
    <div class="popup3">
      <div class="popup-content3">
       <form class="form3" action="php/mer.php" method="POST">	
        <img src="img/close.png" alt="close" class="close3">
        <img src="img/1.png" alt="User">
        <input type="text" placeholder="Enter First name" name="fname">
        <input type="text" placeholder="Enter Last name" name="lname">
        <input type="text" placeholder="Enter Name of the Shop" name="sname">
        <input type="text" placeholder="Enter Email" name="email">
        <input type="Password" placeholder="Enter Password" name="pass">
        <input type="text" placeholder="Enter Contact Number" name="phone">
        <button type="submit" class="butn" name="Submit3" value="submit">Register</button>
        <button type="reset" class="butn" name="clear" value="Clear all">Clear</button>
        <button type="button" class="butn" name="back3" value="back" id="back3">Back</button>
        </form>  
      </div>
       </div>
      

  </header>

  <section id="about">
    <form class="ab_f">
      <h2>About Us</h2>
      <textarea name="intro" cols="40" rows="8">We are mainly forcused on people who travel around the country. Traverlers have more problems to find cool spots to eat. Eating should not be done to surview. Try to enjoy your every meal while traveling. We are here to help for you to find a good place to enjoy your. Make your visits unforgetable. Make memories even while your are eating..!</textarea>
      <img src="img/res.jpg">
    </form>
  </section>

  <section id="services">
    <form class="ser_f">
        <div class="section_tittle text-center">
            <h2>Our Services</h2>
            <p>We are here to help you to find a quality dining time. Make sure to make the best choice</p>
        </div>
         <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="single_feature">
                        <center><img src="img/icon/feature_icon_1.png" alt="#">
                        <h4>Quality Service</h4></center><br>
                        <p>We are trying our best to give you a quality time with with our service. All the merchants who have registerd with us have a good history in their field. Therefore, don't hesitate to make your choice.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_feature">
                        <center><img src="img/icon/feature_icon_2.png" alt="#">
                        <h4>Flexible Timeframe</h4><br></center>
                        <p>You can make your reservations under selected restaurent. So, you have the ability to select your time slot according to your preference. Now you can manage your valuble time with using our site.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
             <div class="single_feature">
                        <center><img src="img/icon/feature_icon_3.png" alt="#">
                        <h4>Less Effort</h4></center><br>
                        <p>No need to ask people about places you can eat. With few touches you can find an amaizing place to enjoy your meal. All the directions are given in perticular web sites. Only have to choose the menu and make the reservation.</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single_feature">
                        <center><img src="img/icon/feature_icon_4.png" alt="#">
                        <h4>Free of Charge</h4></center><br>
                        <p>For the customers you don't have to pay money to Register. It's a free service provided by our site. Amaizing right. :) </p>
            </div>
          </div>
         </div>
    </form>
  </section>


    <footer class="footer-area section_padding" id="contact">
        <div class="container_f">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p>No. 56/8,<br> Raja Veediya road,<br> Kandy,<br> Sri Lanka.</p>
                            <h4>012-6532-568-9746</h4>
                            <h4>012-6532-569-9748</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-5">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                         <div id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="subscribe_form relative mail_part">
                                <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = ' Email Address '">
                                <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm">Subscribe<i class="ti-arrow-right"></i></button>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text">
                        <div class="row">
                            <div class="col-lg-6">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<center>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved @ 2020<i class="ti-heart" aria-hidden="true"></i> by <a href="https://Sharani.com" target="_blank"><font color="blue">Sharani Thalakiriyawa</font></a></center>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            <div class="col-lg-6">
                                <div class="social_icon">
                                    <a href="#"> <i class="ti-facebook"></i> </a>
                                    <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                    <a href="#"> <i class="ti-instagram"></i> </a>
                                    <a href="#"> <i class="ti-skype"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	</body>

  <script>
  	document.getElementById("button").addEventListener("click", function(){
  		document.querySelector(".popup").style.display = "flex";
  	})

  	document.querySelector(".close").addEventListener("click", function(){
  		document.querySelector(".popup").style.display = "none";
  	})

  	document.getElementById("btn1").addEventListener("click", function(){
  		document.querySelector(".popup2").style.display = "flex";
  		document.querySelector(".popup").style.display = "none";
  	})

  	document.querySelector(".close2").addEventListener("click", function(){
  		document.querySelector(".popup2").style.display = "none";
  	})

  	document.getElementById("back2").addEventListener("click", function(){
  		document.querySelector(".popup2").style.display = "none";
  		document.querySelector(".popup").style.display = "flex";
  	})


  	document.getElementById("btn2").addEventListener("click", function(){
  		document.querySelector(".popup3").style.display = "flex";
  		document.querySelector(".popup").style.display = "none";
  	})

  	document.querySelector(".close3").addEventListener("click", function(){
  		document.querySelector(".popup3").style.display = "none";
  	})

  	document.getElementById("back3").addEventListener("click", function(){
  		document.querySelector(".popup3").style.display = "none";
  		document.querySelector(".popup").style.display = "flex";
  	})


  </script>
  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>



</html>