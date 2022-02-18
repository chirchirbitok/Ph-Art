<?php
    include_once "connection.php";

    $sql = "SELECT * FROM about";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        //output data for each row 
        while($row = mysqli_fetch_assoc($result)){
            $about_id = $row['about_id'];
            $about_title = $row['about_title'];
            $about_text = $row['about_text'];
            $about_image = $row['about_image'];

        }
    }
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CleanPhotography - Photography &amp; Portfolio Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  <script src="js/custom.js"></script> 
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
		<div id="main-ld">
			<div class="loader">
				<span class="loader-inner">CleanPhotography</span>
			</div>
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
	
	<!-- <div class="fat-nav">
        <div class="fat-nav__wrapper">
            <ul>
                <li><a class="js-scroll-trigger" href="#home">Home</a></li>
                <li><a class="js-scroll-trigger" href="#about">About Me</a></li>
                <li><a class="js-scroll-trigger" href="wedding-gallery.html">Gallery</a></li>
                <li><a class="js-scroll-trigger" href="#services">Service</a></li>
				<li><a class="js-scroll-trigger" href="#reviews">Reviews</a></li>
				<li><a class="js-scroll-trigger" href="#pricing">Pricing</a></li>
				<li><a class="js-scroll-trigger" href="#contact">Contact Me</a></li>
            </ul>
        </div>
    </div> -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/logo2.png" alt="" border-radius=" 8px"  width="150px"/>
		</a>
        <div id= "gallery" class="section_1b">
            <div class="container">
                <div class="gallery-menu text-center row">
                    <div class="col-md-12">
                        <div class="button-group filter-button-group">
                            <a href="index.php"> <button data-filter="*">Home</button></a>
                            <a href="wedding-gallery.html" > <button data-filter="*" >Gallery</button></a>
                            <a href="about_me.php"><button data-filter=".photo_a">About</button> </a>
                            <!-- <a href="services.html"><button data-filter="">Service</button></a> -->
                            <!-- <a href="reviews.html"><button data-filter="">Reviews</button></a> -->
                            <a href="pricing.php"><button data-filter=".photo_a"> Packages</button></a>
                            <a href="contact_me.html"><button data-filter="">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </nav>


      <!-- about section -->

  <section class="about_section layout_padding-bottom layout_padding2-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
               <?php echo $about_title ?>
                <hr>
              </h2>
            </div>
            <p class="readMore">
              <?php echo $about_text ?><span id="dots">....</span>
            <span id="more"></span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


    <div id="services" class="section lb">
      <div class="container">
          <div class="section-title text-center">
              <h3>- What We Do -</h3>
              <p>Each one of the players needs to do so without any arrows. For some walkers, not some laughter.</p>
          </div><!-- end title -->

          <div class="row">
      <div class="col-md-4">
                  <div class="services-inner-box">
          <div class="ser-icon">
            <i class="flaticon-wedding-photo"></i>
          </div>
          <h2>Wedding Photography</h2>
          <p>A lot of pain is a lot, enhanced monitoring procedures, but I give it time to as low as fatigue and great pain.</p>
        </div>
              </div><!-- end col -->
              <div class="col-md-4">
                  <div class="services-inner-box">
          <div class="ser-icon">
            <i class="flaticon-image"></i>
          </div>
          <h2>Portrait photography</h2>
          <p>A lot of pain is a lot, nhanced monitoring procedures, but I give it time to as low as fatigue and great pain.</p>
        </div>
              </div><!-- end col -->
      <div class="col-md-4">
                  <div class="services-inner-box">
          <div class="ser-icon">
            <i class="flaticon-event"></i>
          </div>
          <h2>Event Photography</h2>
          <p>A lot of pain is a lot, enhanced monitoring procedures, but I give it time to as low as fatigue and great pain.</p>
        </div>
              </div><!-- end col -->
          </div><!-- end row -->
      </div><!-- end container -->
  </div><!-- end section -->


    <div id="about" class="section wb" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2> Jessica Chan </h2>
                        <p> Jessica Sample grew up in Los Angeles and has been traveling far from home and taking pictures ever since childhood.   Her parents owned a stock footage company and she accompanied them across the world with her camera to places as far flung as Bhutan, Tibet, Africa, Europe, and Indonesia. 

                            She was previously the Deputy Photo Editor at Travel + Leisure Magazine in New York and a frequent contributor to the magazine.  She has a Bachelor’s degree from Brown University and has studied at the International Center of Photography.</p>
						<p>Jessica is currently based in Los Angeles.  She is also available for travel assignments departing New York City.  She is the curator of Wanderlust: A Silent Auction Benefit that auctions travel photography prints to raise money for environmental charities.</p>

						
						<div class="skill-bar-box">
							<h2> Photograpgy Skills </h2>
							<div class="skillbar" data-percent="60">
								<span class="skillbar-title" >Wedding</span>
								<p class="skillbar-bar" ></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- End Skill Bar -->
							
							<div class="skillbar" data-percent="80">
								<span class="skillbar-title">Fashion</span>
								<p class="skillbar-bar" ></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- End Skill Bar -->
							
							<div class="skillbar" data-percent="70">
								<span class="skillbar-title">Models</span>
								<p class="skillbar-bar" ></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- End Skill Bar -->
							
							<div class="skillbar" data-percent="90">
								<span class="skillbar-title" >Photograpgy</span>
								<p class="skillbar-bar" ></p>
								<span class="skill-bar-percent"></span>
							</div>
						<!-- End Skill Bar -->
						</div>
                
                        <a href="#" class="sim-btn btn-hover-new" data-text="My Works" style="border: none;"><span>My Works</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpeg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	

	
        <!-- info section -->
  <section class="info_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_logo">
            <div>
              <a href="">
                <img src="images/logo2.png" alt="" />
                <span>
                  Petlor
                </span>
              </a>
            </div>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_links ">
            <h5>
              Get in touch
            </h5>
            <div class="info_contact">
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call +01 1234567890
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    demo@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_insta">
            <h5>
              INFORMATION
            </h5>
            <p class="pr-0 pr-md-4 pr-md-5">
              Until I hate. Each weekend a lot of eros. A lot of pain is a lot, onsectetuer undergraduate elite. Until then hate. Each weekend a lot of eros
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="pl-0 pl-lg-5 pl-md-4">
            <h5>
              Our Shop
            </h5>
            <p>
              Donec odio. Quisque volutpat mattis eros.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
              odio. Quisque volutpat mattis eros
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">CleanPhotography</a> Design By : 
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-camera" aria-hidden="true"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<script src="js/jquery.appear.min.js"></script>
	<script src="js/skill.bars.jquery.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
	<!-- <script src="js/jquery.fatNav.min.js"></script> -->
	<script src="js/main.js"></script>
    
  <script src="js/custom.js"></script>
  
  <!-- Read more or less about us fuction -->
  <!-- <script>
    function readML(){
      var dots = document.getElementById("dots");
      var moreText =document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if(dots.style.display=== "none"){
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none"
      }else{
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline"
      }
    }
  </script> -->
  <script type="text/javascript">
    $(document).ready(function() {
  var max = 700;
  $(".readMore").each(function() {
      var str = $(this).text();
      if ($.trim(str).length > max) {
          var subStr = str.substring(0, max);
          var hiddenStr = str.substring(max, $.trim(str).length);
          $(this).empty().html(subStr);
          $(this).append(' <a href="javascript:void(0);" class="link" style="background-color: #8299CD">Read more…</a>');
          $(this).append('<span class="addText">' + hiddenStr + '</span>');
      }
  });
  $(".link").click(function() {
      $(this).siblings(".addText").contents().unwrap();
      $(this).remove();
  });
});
  </script>
    <style>
      .readMore .addText {
      display: none;
      }

    </style>
</body>
</html>