<!DOCTYPE html>
<html lang="en">
<head>

     <title>Health - Medical Website Template</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/login.css">	
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">
	 

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to a Professional Health Care</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 010-060-0160</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@healthcenter.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header navbar-right">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="homepage1.php" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
						 <li class="appointment-btn"><a href="#appointment" style="font-weight:bold;font-size:18px">احجز موعد</a></li>
						
						  <?php 
						 
						 if(isset($_SESSION['password'])){
						 
						   if($_SESSION['type'] == "مريض"){
						 
						 
						 ?>
	
	                         <li><a style="font-weight:bold;font-size:17px" href="patient/patients-records.php">ملفي الشخصي</a></li>

                       <?php
							   
						   }elseif($_SESSION['type'] == "مدير"){
							   
							   echo '<li><a style="font-weight:bold;font-size:17px" href="admin/patients.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "طبيب"){
							   
							   echo '<li><a style="font-weight:bold;font-size:17px" href="doctors/patients-records.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "موظف وزارة الصحة"){
							   
							   echo '<li><a style="font-weight:bold;font-size:17px" href="health_ministry/records.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "موظف استقبال"){
							   
							   echo '<li><a style="font-weight:bold;font-size:17px" href="receptionist/patients.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "فني المعمل"){
							   
							   echo '<li><a style="font-weight:bold;font-size:17px" href="lab_artistic/requests.php">ملفي الشخصي</a></li>';
							   
						   }elseif($_SESSION['type'] == "مريض"){
							   
							   echo '<li><a style="font-weight:bold;font-size:17px" href="patient/patients-records.php">ملفي الشخصي</a></li>';
							   
						   }
							 
							}else{  ?>
							 
							 
							 <li><a style="font-weight:bold;font-size:17px" href="login.php">تسجيل الدخول</a></li>  
							 
						<?php	 
						 }
						 
						 
						 ?>
						
						
						 <li><a href="#contact" class="smoothScroll" style="font-weight:bold;font-size:17px">تواصل معنا</a></li>
						 <li><a href="#news" class="smoothScroll" style="font-weight:bold;font-size:17px">أخر الأخبار</a></li>
						 <li><a href="#team" class="smoothScroll" style="font-weight:bold;font-size:17px">أطبائنا</a></li>
						 <li><a href="#about" class="smoothScroll" style="font-weight:bold;font-size:17px">نبذة عنا</a></li>
                         <li><a href="homepage1.php" class="smoothScroll" style="font-weight:bold;font-size:17px">الرئيسية</a></li>
                         
                         
                        
                         
                         
                    </ul>
               </div>

          </div>
     </section>
	   
	   
	   
<div class="design" dir="rtl" style="height:auto;margin-top:300px">
	
 <form class="login" action="login-conn1.php" method="post">
	 
  <h4 class="text-center" style="color:#157FDA">تسجيل الدخول</h4> 
  <div class="ast">
	  <input class="form-control email" type="text" placeholder="البريد الالكتروني" name="email" autocomplete="off" required="required"/>
	  <i class="fa fa-envelope-o"></i>
	  <i class="fa fa-check check"></i>
	  <i class="fa fa-close close"></i>
	  <div class="alert alert-danger empty-alert">البريد الالكتروني مطلوب أو <strong>اجباري</strong></div>
	  <div class="alert alert-danger custom-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>@</strong></div>
	  <!--<div class="alert alert-danger long-alert"> البريد الالكتروني يجب أن يحتوي علي<strong>com.</strong></div>-->
  </div>
  <div class="ast">
	  <input class="form-control password" type="password" placeholder="كلمة المرور" name="password" autocomplete="new-password" required="required"/>
	  <i class="fa fa-key"></i>
	  <i class="fa fa-check check check-pass"></i>
	  <i class="fa fa-close close close-pass"></i>
	  <i class="show-pass fa fa-eye fa-2x"></i>
	  <div class="alert alert-danger empty-alert">كلمة المرور لا يمكن أن تترك  <strong></strong>فارغة</div>
	  <div class="alert alert-danger long-alert">كلمة المرور يجب أن تكون علي الأقل  <strong>6 حروف</strong></div>
	  <!--<div class="alert alert-danger custom-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة.</strong></div>
	  <div class="alert alert-danger lower-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف صغيرة.</strong></div>-->
	  <div class="alert alert-danger number-alert">كلمة المرور يجب أن تحتوي علي <strong>حروف كبيرة وحروف صغيرة ورقم.</strong></div>
  </div>
  <input style="background-color:#157FDA" class="btn btn-primary btn-block button" type="submit" value="دخول"/>	
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:10px">
	  <span>هل انت مريض؟ </span><a style="text-decoration:none" href="login.php">صفحة تسجيل دخول مريض</a>
  </div>	 
  <div class="text-center" style="margin-top:10px;font-weight:bold">
	  <span>هل أنت لا تمتلك حساب؟ </span><a style="text-decoration:none" href="signup.php">انشاء حساب الان</a>
  </div>
  <div class="text-center" style="margin-top:10px;font-weight:bold;padding-bottom:20px">
	  <span>هل نسيت كلمة المرور؟ </span><a style="text-decoration:none" href="resetpassword.php">اعادة تعيين الان</a>
  </div>	 
 </form>
</div>
	   
	   
	   
	   
	<!-- FOOTER -->
     <footer id="contact" data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">info@healthcenter.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Amazing Technology</h5></a>
                                        <span>March 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>New Healing Process</h5></a>
                                        <span>February 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                                   <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 Health Center 
                                   
                                   | Designed By: Success Team</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <!--<div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>-->
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/customm.js"></script>
	 <script src="js/front.js"></script> 
   </body>
</html>   