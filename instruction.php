<?php 
ob_start();
session_start();
// $_SESSION["email"] = "vishwakarma@gmail.com";
// print_r($_SESSION);
// $_SESSION["gender"] = "Male";


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Instruction </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Elearn project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap/bootstrap.min.css">
<!--  -->
<!-- Bootstrap CSS -->
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous"
/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/instruction.css">
</head>
<body >

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li class="text-light"><div class="question">Student Dashboard </div></li>
									<li class="text-light"><div class="question"><span class="text-light">Student Name : </span> <?php echo htmlspecialchars($_SESSION["firstname"]); ?> <span class="text-white">Gender :</span> <?php echo htmlspecialchars($_SESSION["gender"]); ?></div></li>
									
								</ul>
								<div class="top_bar_login ml-auto">
									<ul>
										<li><a href="logout.php">Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_content d-flex flex-row align-items-end justify-content-start">
										<div class="logo_img">
											<!-- <img src="images/logo.png" alt="">-->
											</div> 
										<div class="logo_text">SERAC EDUCATION</div>
									</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class=""><a href="index.html">home</a></li>
									<li><a href="#">notification</a></li>
									<li><a href="#">result Annousement</a></li>
									<li><a href="#">exam date</a></li>
									<li class="active"><a href="#" >instruction</a></li>
									<li ><a href="#">dashboard</a></li>
								</ul>
								<div class="search_button">
                                </div>

								<!-- Hamburger -->

								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
        
		<!-- <div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>		 -->
        
	</header>

	<!-- Menu Nav tag-->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
        <!-- toggle menu -->
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="#">Notification</a></li>
				<li class="menu_mm"><a href="#">Result Announcement</a></li>
				<li class="menu_mm"><a href="#">Exam Date</a></li>
				<li class="menu_mm"><a href="#">Instruction </a></li>
				<li class="menu_mm"><a href="#">Dashboard</a></li>
               </ul>
		</nav>
		<div class="menu_extra">
		      <div class="menu_phone"><span class="menu_title">Student Name :</span> <span class="text-uppercase font-weight-bold"><?php echo htmlspecialchars($_SESSION["firstname"]); ?> </span>
                    <ul>
                        <li class="qlist"> <a href="index.php"><i class="fa " aria-hidden="true"></i>Logout</a></li>
                    </ul>
                </div>
			<div class="menu_phone"><span class="menu_title">phone:</span>(+91) 9768421308 </div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

    <!-- Main Content Star̥t -->
	

    <div class="container">
      <div class="box-container">
        <div class="headers">
          <p class="headers-title p-3">
            General Instructions:
          </p>
        </div>

        <div class="container">
          <div class="instruction mb-5">
            <ul type="square" class="square">
              <li class="inst-text">
                All statements in the questionnaire are related to your
                day-to-day life experiences.
              </li>
              <li class="inst-text">
                We need to know your opinion on these statements in the form of
                two options- “Yes” or “NO”.
              </li>
              <li class="inst-text">
                No statement and your response to it, is right or wrong, it’s
                all about your opinion on your experiences.<br />
                So, please give your responses without any hesitation.
              </li>
              <li class="inst-text">
                All information will be very confidential, and we will keep it
                with ourselves.
              </li>
              <li class="inst-text">Let us start now!</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="instruction-proceed">
        <span class="alert intro-proceed text-center">
          Click proceed to begin your test</span
        >
        <a href="quesdemo.php">
          <h3 class="btn" id="btn-startTest">
            Start test
          </h3></a
        >
	
      </div>
    </div>

	<!-- Featured Course -->

	

	<!-- Courses -->

  </div>



	<!-- Milestones -->

	

	<!-- Sections -->



	<!-- Video -->

	

	<!-- Join -->

	

	<!-- Footer -->
	<footer>
		<div class="container-fluid headers" style="background-color: #2170AC;">
		<div class="row p-5">
		  <!--  -->
	 <div class="col-md-6 p">
	   <div class="company-detail text-light  footer-text">
		 <ul  style="list-style:none">
		   <li> <b>Serac Education Pvt. Ltd. </b></li>
		   <li>618, Nirmal Corporate Centre,.</li>
		   <li>LBS Road, Moti Nagar, Mulund West, Mumbai 400080.</li>
	   </div>
	 </div>
	 <!--  -->
	 <div class="col-md-6">
		<div class="company-detail text-light desktop footer-text mob">
		  <ul style="list-style:none">
			<li>Phone No : 9967153285</li>
			<li>Email : info@seracedu.com</li>
			<li>Website : <a href="https://www.ollato.com/" target="_blank"> <span class="text-light"> Ollato.com </span></a></li>
		</div>
	  </div>
	
		</div>
		
		<div class="row p-5">
	
			<div class="col-12">
				<div class="company-detail text-light text-center">
				  <ul style="list-style:none">
					<li>Copy right 	&#169; 2022: All Rights Reserved.</li>
				  </ul>
					
				</div>
			  </div> 
		</div>
	
		</div>
		</div>
	  </footer>
	



<!-- script start -->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap/popper.js"></script>
<script src="styles/bootstrap/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/video-js/Youtube.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>