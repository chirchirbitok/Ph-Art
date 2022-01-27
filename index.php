<?php
    
   include_once "connection.php";


$sql = "SELECT id, title, description, services FROM home";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    //echo "id: " . $row["id"]. " - Title: " . $row["title"]. "Decription: " . $row["description"]."services: " . $row["services"].  "<br>";
    $id = $row["id"];
    $title = $row["title"];
    $description = $row["description"];
    $services = $row["services"];
  }
} else {
  echo "0 results";
}

$sql1 = "SELECT profile_id, full_name, bio, profile_image, wedding_skill, fashion_skill, model_skill, photography_skills FROM profile";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result1)) {
    //echo "profile_id: " . $row["profile_id"]. " - full_name: " . $row["full_name"].  "<br>";
    $profile_id = $row["profile_id"];
    $full_name = $row["full_name"];
    $bio = $row["bio"];
    $profile_image = $row["profile_image"];
    $wedding_skill = $row["wedding_skill"];
    $fashion_skill = $row["fashion_skill"];
    $model_skill = $row["model_skill"];
    $photography_skills = $row["photography_skills"];
  }
} else {
  echo "0 results";
}
$sqll = "SELECT service_id, service_title, services FROM service  ";
$Serv_result = mysqli_query($conn, $sqll);



$sql = "SELECT reviews_id, reviews_descr, review_title, review_comment, fullname, occupation_title FROM reviews WHERE reviews_id=601 ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    //echo "reviews_id: " . $row["reviews_id"]. "<br>";
    $review_title = $row["review_title"];
    $review_comment = $row["review_comment"];
    $fullname = $row["fullname"];
    $occupation_title = $row["occupation_title"];
  }
} else {
  echo "0 results";
}




mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

    <!-- BasFloc -->
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
			<img class="img-fluid" src="images/logoo.jpeg" alt=""   border-radius=" 8px"  width="150px"/>
		</a>
        <div id= "gallery" class="section_1b">
            <div class="container">
                <div class="gallery-menu text-center row">
                    <div class="col-md-12">
                        <div class="button-group filter-button-group">
                            <a href="index.html"> <button data-filter="*">Home</button></a>
                            <a href="wedding-gallery.html"> <button data-filter="*">Gallery</button></a>
                            <a href="about_me.html"><button data-filter=".photo_a">About</button> </a>
                            <!-- <a href="services.html"><button data-filter="">Service</button></a> -->
                            <!-- <a href="reviews.html"><button data-filter="">Reviews</button></a> -->
                            <a href="pricing.html"><button data-filter=".photo_a"> Packages</button></a>
                            <a href="contact_me.html"><button data-filter="">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </nav>
	
    <?php
    
    
    ?>

	<section id="home" class="main-banner parallaxie" style="background: url('uploads/banner-01.jpg')">
		<div class="heading">
			<h1><?php print_r($title) ?></h1>
			<p> <?php print_r($description) ?> </p>
			<h3 class="cd-headline clip is-full-width">
				<span>A lot of pain is a lot </span>
				<span class="cd-words-wrapper">
					<b class="is-visible">Fashion photography</b>
					<b>Candid photography</b>
					<b>Landscape photography</b>
					<b>Documentary photography</b>
					<b>Architectural photography</b>
				</span>
			</h3>
		</div>
	</section>
	
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2><?php print_r($full_name) ?></h2>
                        <p> <?php print_r($bio) ?> </p>
						
						
						<div class="skill-bar-box">
							<h2> Photograpgy Skills </h2>
							<div class="skillbar" data-percent="<?php print_r($wedding_skill) ?>">
								<span class="skillbar-title" style="background: #db5c87;">Wedding</span>
								<p class="skillbar-bar" style="background: #e45050;"></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- End Skill Bar -->
							
							<div class="skillbar" data-percent="<?php print_r($fashion_skill) ?>">
								<span class="skillbar-title" style="background: #db5c87;">Fashion</span>
								<p class="skillbar-bar" style="background: #e45050;"></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- End Skill Bar -->
							
							<div class="skillbar" data-percent="<?php print_r($model_skill) ?>">
								<span class="skillbar-title" style="background: #db5c87;">Models</span>
								<p class="skillbar-bar" style="background: #e45050;"></p>
								<span class="skill-bar-percent"></span>
							</div>
							<!-- End Skill Bar -->
							
							<div class="skillbar" data-percent="<?php print_r($photography_skills) ?>">
								<span class="skillbar-title" style="background: #db5c87;">Photograpgy</span>
								<p class="skillbar-bar" style="background: #e45050;"></p>
								<span class="skill-bar-percent"></span>
							</div>
						<!-- End Skill Bar -->
						</div>
						
                        <a href="#" class="sim-btn btn-hover-new" data-text="My Works"><span>My Works</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <div id="gallery" class="section lb" >

		<div class="container">
			<div class="section-title text-center">
				<h3>Gallery</h3>
			</div><!-- end title -->
		
			<!-- <div class="gallery-menu text-center row">
				<div class="col-md-12">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">All</button>
						<button data-filter=".photo_a">Wedding</button>
						<button data-filter=".photo_b">Models</button>
						<button data-filter=".photo_c">Fashion</button>
                        <button data-filter="">Videos Highlights</button>
					</div>
				</div>
			</div> -->
		
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid photo_a">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-01.jpg" class="img-fluid" alt="Image">
						<div class="box-content">
							<div class="inner-content">
								<h3 class="title">Wedding</h3>
								<span class="post">Latest Photo</span>
							</div>
							<ul class="icon">
								<li><a href="uploads/gallery_img-01.jpg" data-rel="prettyPhoto[gal]"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid photo_b">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-04.jpg" class="img-fluid" alt="Image">
						<div class="box-content">
							<div class="inner-content">
								<h3 class="title">Models</h3>
								<span class="post">Latest Photo</span>
							</div>
							<ul class="icon">
								<li><a href="uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid photo_c">
					<div class="gallery-single fix">
						<img src="uploads/gallery_img-07.jpg" class="img-fluid" alt="Image">
						<div class="box-content">
							<div class="inner-content">
								<h3 class="title">Fashion</h3>
								<span class="post">Latest Photo</span>
							</div>
							<ul class="icon">
								<li><a href="uploads/gallery_img-07.jpg" data-rel="prettyPhoto[gal]"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
    <div id="services" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Services</h3>
                <p> Each one of the players needs no arrows to do so. For some walkers, not some laughter.</p>
            </div><!-- end title -->

            <div class="row">

            <?php if ( $Serv_result && !empty($Serv_result) ) :?>
            <?php foreach ($Serv_result as $key =>$row) :{ $service_title = $row['service_title']; $services = $row['services'];}?>

            <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                          <i class="flaticon-wedding-photo"></i>
                        </div>
                        <h2> <?php echo $service_title ?></h2>
                        <p> <?php  echo $services ?> </p>
                      </div>
            </div><!-- end col -->

        <?php endforeach ?>
        <?php endif?>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
	 <div id="reviews" class="section wb parallaxie" style="background: url('uploads/reviews-bg.jpg')">
        <div class="container">
            <div class="section-title text-center">
                <h3>Reviews</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
							<figure class="testimonial_img">
								<img src="uploads/testi_01.jpg" alt="" class="img-fluid">
							</figure>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> <?php print_r($review_title) ?> </h3>
                                <p> <?php print_r($review_comment) ?> </p>
                            </div>
                            <div class="testi-meta">
                                <h4> <?php print_r($fullname) ?> <small> - <?php print_r($occupation_title) ?></small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<figure class="testimonial_img">
								<img src="uploads/testi_02.jpg" alt="" class="img-fluid">
							</figure>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<figure class="testimonial_img">
								<img src="uploads/testi_03.jpg" alt="" class="img-fluid">
							</figure>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p>The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
							<figure class="testimonial_img">
								<img src="uploads/testi_01.jpg" alt="" class="img-fluid">
							</figure>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p>They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<figure class="testimonial_img">
								<img src="uploads/testi_02.jpg" alt="" class="img-fluid">
							</figure>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
							<figure class="testimonial_img">
								<img src="uploads/testi_03.jpg" alt="" class="img-fluid">
							</figure>
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p>The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	
    <!-- Pricing-->
	<!-- <div id="pricing" class="section lb">
		<div class="container">
			<div class="section-title text-center">
                <h3>Pricing</h3>
                <p> Each one of the players needs to do so without any arrows. For some walkers, not some laughter.</p>
            </div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="title">Studio</h3>
                        </div>
                        <div class="pricing-content">
                            <div class="price-value">
                                <i class="fa fa-star"></i>
                                <span class="amount">10$</span>
                                <span class="month">month</span>
                            </div>
                            <ul>
                                <li>1-Location Shoot</li>
                                <li>$10 Print Credit</li>
                                <li>15 Digital Files</li>
                                <li>Print Release</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable yellow">
                        <div class="pricingTable-header">
                            <h3 class="title">Fasion</h3>
                        </div>
                        <div class="pricing-content">
                            <div class="price-value">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                <span class="amount">20$</span>
                                <span class="month">month</span>
                            </div>
                            <ul>
                                <li>2-Location Shoot</li>
                                <li>$30 Print Credit</li>
                                <li>20 Digital Files</li>
                                <li>Print Release</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="pricingTable purple">
                        <div class="pricingTable-header">
                            <h3 class="title">Wedding</h3>
                        </div>
                        <div class="pricing-content">
                            <div class="price-value">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                <span class="amount">30$</span>
                                <span class="month">month</span>
                            </div>
                            <ul>
                                <li>3-Location Shoot</li>
                                <li>$40 Print Credit</li>
                                <li>25 Digital Files</li>
                                <li>Print Release</li>
                            </ul>
                            <a href="#" class="pricingTable-signup">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div> -->

    <!-- Pricing-->
    <div id="contact" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="text-transform:uppercase" >contact us to start planning</h3>
                <p>If you're ready to begin this friendship, send us a message. We will respond back with a full guide and some questions to help us get to know you!</p>
            </div><!-- end title -->
            <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Let's Connect" type="submit">Let's Connect</button>
            </div>

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
                <img src="images/logoo.jpeg" alt="" />
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
    <script src="js/carousel.js"></script>
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

</body>
</html>