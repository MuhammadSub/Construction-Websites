 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Contact Us</title>       
         <link rel="shortcut icon" href="img/favicon.ico">         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/contact.css" rel="stylesheet" type="text/css">
         <!------------Responsive css file------------->         
         <link href="css/responsive.css" rel="stylesheet" type="text/css">
         <!-------------Magnific popup css file------------->
         <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		 <!-------------Magnific popup css file------------->        
         <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"> 
         <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">    
         <!-------------Font Awesome cdn files------------->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">         
         <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">               
         <!-------------Animate css file------------->
         <link href="css/animate.css" type="text/css" rel="stylesheet">     
         <!-- jQuery library -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>                   
         <!-------------Owl Carousel Js file------------->
         <script src="js/owl.carousel.min.js" type="text/javascript"></script>                 
         <!-------------Magnific popup Js file------------->
         <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script> 
         <!-- Latest compiled JavaScript -->
         <script src="js/bootstrap.min.js" type="text/javascript"></script>
		 <!--Dropdown navbar menu-->
		 <script>
			 $(document).ready(function(){
				 $(".dropdown").hover(function(){
					 var dropdownMenu = $(this).children(".dropdown-menu");
					 if(dropdownMenu.is(":visible")){
						 dropdownMenu.parent().toggleClass("open");
					 }
				 });
			 });     
</script>
 
     </head>
     <body>
        <div class="entire-content">  
        <!--------Navigation starts-------->
        <nav class="navbar  navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                   <!---------Responsive button------------>
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>                       
                   </button>
                    <a href="" class="navbar-brand ">Subhan Ali</a>
                </div>
                <div class="collapse navbar-collapse" id="navi"> 
                 <!---------Navigation menus------------>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="nav-link active">Home</a></li>
                    <li><a href="services.php" class="nav-link">Services</a></li>
                    <li><a href="about.php" class="nav-link">About us</a></li>
                    <li><a href="" class="nav-link">Blog</a></li> 
					<li><a href="book.php" class="nav-link">Book Now</a></li>
                    <li><a href="apply.php" class="nav-link">Apply Now</a></li> 
					<li><a href="contact.php" class="nav-link">Contact US</a></li>
                </ul>
                 <!---------Navigation menus end------------>
                </div>          
            </div>         
            </nav>
         <!--------Navigation Ends-------->
        
          <!---------------contacthead section starts------------->
          <section class="slider contacthead text-center">              
              <div class="contacthead-overlay">
                  <div class="contacthead-content text-center">
                          <h2><strong>Contact Us</strong></h2>                   
                  </div>                  
              </div>       
          </section>  
         <!---contact head section ends--->
			
		<!--contact start-->
		<section class="contact-area" id="contact_area">
           <div class="container-fluid">
                 <div class="row wow fadeInUp">
                     <div class="contactus col-md-6 col-xs-12 col-md-offset-3 text-center">
						 <div class="col-md-6 col-md-offset-3 text-center">
							 <div class="section-heading wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
							   <h2 class="section-title"><b>Send Us a Message</b></h2>
							   <div class="border-bottom-now"></div>                           
						     </div> 
						 </div>
                         <form id="contactform" class="col-md-12 col-md-offset-1 contact-form text-center" action="handler/contacthandler.php" method="post">
                             <div class="row content">
                                 <div class="col-sm-10"><br>
									 <input class="form-control" type="text" name="email" placeholder="Your Email Address">
                                 </div>
                                 <div class="col-sm-10"><br>
									 <textarea class="form-control" rows="8" name="msg" placeholder="How Can We Help?"></textarea>   
                                 </div>
                                 <div class="col-sm-10 text-center"><br><br>
                                     <button class="conbtn" type="submit">Submit Message</button>                                    
                                 </div>   
                             </div>
                         </form>
                     </div>
                 </div>
                 <div class="row">                     
                     <div class="contact-infos">
                         <div class="col-md-4 text-center">
                             <div class="contact-item wow fadeInLeft" data-wow-duration=".3s" data-wow-delay=".3s">
                                 <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                                 <p class="contact-detail">
                                     68 Dohava Strees, Lorem isput Spusts<br>
                                      New York, United State                                     
                                 </p>
                             </div>                             
                         </div>
                            
                              <div class="col-md-4 text-center">
                             <div class="contact-item wow fadeInLeft" data-wow-duration=".6s" data-wow-delay=".6s">
                                 <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                                 <p class="contact-detail">
                                     info@geo.com <br>
                                     support@geo.com                                  
                                 </p>
                             </div>                             
                         </div> 
                            
                            
                            <div class="col-md-4 text-center">
                             <div class="contact-item wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".9s">
                                 <span class="contact-icon"><i class="fa fa-phone"></i></span>
                                 <p class="contact-detail">
                                     +123-456-7890 - Central Office<br>
                                      +123-456-7890 - Fax                                  
                                 </p>
                             </div>                             
                         </div>                         
                     </div>              
                 </div>  
           </div>        
         </section>
		<!--contact End-->
		<!-----------Markup for Maps----------------->
       <section class="maps wow fadeInUp" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26546.632505304264!2d72.81855223673782!3d33.7263061084552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa38b91e665db%3A0x336f6bfa405908b3!2sTaxila%20Cantt%2C%20Taxila%2C%20Rawalpindi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1633757378947!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>"</iframe>    
        </section> 
       <!-------------Map end--------------->
			
       <!-------------Footer start--------------->
       <footer class="footer">
           <div class="container">
               <div class="row">
                   <div class="col-sm-12">
					   <div class="col-md-4 col-sm-6 col-xs-12">
                          <div class="footer-col">
							  <h4>About us</h4>
                              <p>
								  We are enhancing quality of life for all, be it people or a service. Our services will build people’s life easier and convenient.
                              </p>
                          </div>
                       </div>
					   <div class="col-sm-8 col-xs-12 text-center">
						   <div class="social-icon">
							 <a href=""><i class="fa fa-facebook wow fadeInLeft" data-wow-duration=".3s" data-wow-delay=".3s" ></i></a>  
							 <a href=""><i class="fa fa-twitter wow fadeInLeft" data-wow-duration=".6s" data-wow-delay=".6s"></i></a>  
							 <a href=""><i class="fa fa-google-plus wow fadeInLeft" data-wow-duration=".9s" data-wow-delay=".9s"></i></a> 
							 <a href=""><i class="fa fa-linkedin wow fadeInLeft" data-wow-duration="1.8s" data-wow-delay="1.8s" ></i></a>  
							 <a href="https://wa.me/923445559782"><i class="fa fa-whatsapp wow fadeInLeft" data-wow-duration="2.1s" data-wow-delay="2.1s"></i></a>  
						   </div>	   
					   </div>
					   <div class="col-xs-12 text-center">
                       <div class="copyright">
						   <div class="bordernow"></div><br>
                           <p class="footerrest">Subhan Ali Contruction &copy; 2021</p>
                       </div>     
					   </div>
                    </div>  
               </div>
           </div>
       </footer>
       </div>
  
         <script src="js/jquery.ripples-min.js" type="text/javascript"></script>  
         <script src="js/typed.min.js" type="text/javascript"></script>
         <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
         <script src="js/jquery.counterup.min.js" type="text/javascript"></script>           
         <script src="js/main.js" type="text/javascript"></script>
         <script src="js/smoothscroll.js" type="text/javascript"></script>
         <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
         <script src="js/wow.min.js" type="text/javascript"></script>
     
     </body>
 </html>