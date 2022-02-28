 <!DOCTYPE html>
 <html>
     <head>
         <title>Subhan Ali Construction -  Services</title>       
         <link rel="shortcut icon" href="img/favicon.ico">         
        
		 <link href="css/style.css" rel="stylesheet" type="text/css">
		 <link href="css/services.css" rel="stylesheet" type="text/css">
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
          <section class="slider servicehead text-center">              
              <div class="servicehead-overlay">
                  <div class="servicehead-content text-center">
                          <h2><strong>Services</strong></h2>                   
                  </div>                  
              </div>       
          </section>  
         <!---contact head section ends--->
			
		<!------------services Starts------------->  
        <section class="latest-services-area">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section-title wow zoomIn" data-wow-duration=".2s" data-wow-delay=".2s">
                            <h2><b>Services</b></h2>
                            <div class="sub-heading">
                                Thorough assessments, complete designs, and detailed proposals enable a smooth and surprise-free construction effort from concept through completion. Customers benefit from cost effective, aesthetically pleasing, energy efficient and environmentally sound buildings that facilitate a relationship among people, technology and space.
                            </div>  
                        </div>
                    </div>                    
                </div><br><br> 
                <div class="row">
                    <div class="services-active">
						<?php
						  include('partials/connect.php');

						  $sql="SELECT * from services";
						  $results=$connect->query($sql);
						
						  while ($final=$results->fetch_assoc()) {
						?>
                       <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft <?php echo $final['category'] ?>" data-wow-duration=".4s" data-wow-delay=".4s">
                           <div class="latest-services-wrap">
                               <div class="services-img">
                                   <img class="img-responsive" src="admin/<?php echo $final['picture'] ?>" alt="No File">  
                               </div>
                               <div class="services-content">
								   <h3><?php echo $final['name'] ?></h3>
                                   <p>
                                       <?php echo $final['description'] ?>
                                   </p><br>
								   <form action="details.php?details_id=<?php echo $final['id']?>">
                                   <button class="serbtn" tupe="submit">Read More</button></form>
							   </div> 
						   </div> 
						</div>
                        <?php } ?>
						</div>
					</div> 
				</div>  
			</div>
			</section>
        <!------------Services end------------->
			
	    <!-------------BUILD THE BEST – BE THE BEST------------->
         <section class="buildbest">             
             <div class="container-fluid">
				 <div class="row">
                  <div class="col-md-12 vision text-center">
					  <div class="overlay-vision">
					  <div class="text-center wow zoomIn" data-wow-duration="0.3s" data-wow-delay="0.3s">
						  <br><br>
						  <h2><b>YOU HAVE A VISION.<br>WE HAVE A PROVEN PROCESS<br> TO GET YOU THERE.</b></h2>
						  <a href="" class="bbbtn">TAKE THE NEXT STEP</a>
				      </div>
					  </div>
					 </div>
				 </div>
             </div>   
         </section>
         <!-------------BUILD THE BEST – BE THE BEST End------------->
			
		<!------------Ask question Starts------------->        
        <section class="contact-area" id="contact_area">
           <div class="container">
                 <div class="row">                     
                     <div class="contact-infos">
						 <div class="col-sm-6 col-xs-12">
                          <div class="askquestion">
                              <h2><b>Do You Have Questions ?</b></h2>
                              <p>Our Support Team Communicate Immediately.</p>
                          </div>
                      </div> 
					  <div class="col-sm-6 col-xs-12">
						  <div class="askbtn">
						  <a href="" class="aqbtn">Get in Touch &nbsp;&nbsp;<i class="fa fa-envelope"></i></a>
						  </div>
                       </div>
                     </div>              
                 </div>  
           </div>        
         </section>
		
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