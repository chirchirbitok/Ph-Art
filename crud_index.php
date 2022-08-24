<?php
  include_once "connection.php";
  require_once "./php/component.php";
  require_once "./php/operation.php";
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
    <!-- Awesome Fonts -->
    <script src="https://kit.fontawesome.com/203da5c59d.js" crossorigin="anonymous"></script>
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
			<img class="img-fluid" src="images/logo2.png" alt=""   border-radius=" 8px"  width="150px"/>
		</a>
        <div id= "gallery" class="section_1b" >
            <div class="container" >
                <div class="gallery-menu text-center row" >
                    <div class="col-md-12" >
                        <div class="button-group filter-button-group" >
                            <a href="index.php"> <button data-filter="*">Home</button></a>
                            <a href="wedding-gallery.html"> <button data-filter="*">Gallery</button></a>
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
	
 

	<section id="home" class="main-banner parallaxie" style="background: url('uploads/banner-01.jpg')">
		<div class="heading">
      
        <h1>Welcome to Clean Photography</h1>
        <p> The pain itself is love, the main customer</p>
      <div class="row">  
        <div class="col-md-4 " style="margin-left: 5;">
          <form class="call" method="POST">
                <input type="" class="form-control" id="home_id" placeholder="ID" name="home_id">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Web Title" name="home_title">
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Web Description" name="home_desc">
                <?php buttonI("btn btn-success","Create" ,"create_Home"); ?>
                <?php buttonI("btn btn-primary","Read" ,"readHome"); ?>
                <?php buttonI("btn btn-info","Update" ,"updateHome"); ?>
                <?php buttonI("btn btn-danger","Delete" ,"deleteRecordHome"); ?>
              
              
                
          </form>
      </div>

      <div class="col-md-7">
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">Service ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th>Edit</th>
              </tr>
            </thead>  
            <tbody id="tbodyHome">
              
              <?php
                if(isset($_POST["readHome"])){
                  $result = getHomeData();
            
                  if($result){
                    while($row = mysqli_fetch_assoc($result)){?>
                      <tr>
                        <td data-id="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></td>
                        <td data-id="<?php echo $row['id'] ?>"><?php echo $row['title'] ?></td>
                        <td data-id="<?php echo $row['id'] ?>"><?php echo $row['description'] ?></td>
                        <td><i class="fas fa-edit btneditHome"  data-id="<?php echo $row['id'] ?>" style="cursor: pointer; color: lightsalmon;" ></i></td>
                      </tr>
                      
                      <?php
                    }
                  }
                  
                } 
              ?>
            </tbody>
          </table>
      </div>
      </div>
        
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
                        <form method="POST">
						
						
                        <div class="skill-bar-box">
                          <h2> Photography Skills </h2>
                            <input type="" class="form-control" id="id" name="id" placeholder="ID"><br>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Full name"><br>
                            <input type="text" class="form-control" id="bio" name="profile_bio" placeholder="Bio"><br> 
                            <input type="text" class="form-control" id="wedding" name="wedding" placeholder="Wedding"><br>
                            <input type="text" class="form-control" id="fashion" name="fashion" placeholder="Fashion"><br>
                            <input type="text" class="form-control" id="model" name="model" placeholder="Model"><br>
                            <input type="text" class="form-control" id="photography" name="photography" placeholder="Photography"><br><br>


                            <?php buttonI("btn btn-success","Create" ,"create_profile"); ?>
                            <?php buttonI("btn btn-primary","Read" ,"read_profile"); ?>
                            <?php buttonI("btn btn-info","Update" ,"update_profile"); ?>
                            <?php buttonI("btn btn-danger","Delete" ,"deleteMyProfile"); ?>

                        </div>
					
                            </form>
                  </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpeg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <table class="table table-dark" style="margin-top: 40 ;">
                    <thead >
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Bio</th>
                        <th scope="col">Wedding Skill</th>
                        <th scope="col">Fashion Skill</th>
                        <th scope="col">Model Skill</th>
                        <th scope="col">Photography Skill</th>
                        <th scope="col">Edit</th>
                        
                      </tr>
                    </thead>
                    <tbody id="tbodyProfile">
                  <?php
                       if(isset($_POST["read_profile"])){
                        $result = getProfileData();
                        //echo "ilajil cccccc";

                        if($result){
                          while($row = mysqli_fetch_assoc($result)){?>
                            <tr>
                            <td data-id="<?php echo $row['profile_id'] ?>"><?php echo $row['profile_id'] ?></td>
                            <td data-id="<?php echo $row['profile_id'] ?>"><?php echo $row['full_name'] ?></td>
                            <td data-id="<?php echo $row['profile_id'] ?>"><?php echo $row['bio'] ?></td>
                            <td data-id="<?php echo $row['profile_id'] ?>"><?php echo $row['wedding_skill'] ?></td>
                            <td data-id="<?php echo $row['profile_id'] ?>"><?php echo $row['fashion_skill'] ?></td>
                            <td data-id="<?php echo $row['profile_id'] ?>"> <?php echo $row['model_skill'] ?></td>
                            <td data-id="<?php echo $row['profile_id'] ?>"><?php echo $row['photography_skills'] ?></td>
                            <td><i class="fas fa-edit btneditProfile"  data-id="<?php echo $row['profile_id'] ?>" style="cursor: pointer; color: lightsalmon;" ></i></td>
                          </tr><?php
                          }
                        }else{
                          echo "Table is empty";
                        }
                    }
                  ?>
                    </tbody>
                  </table>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
	

    <section class="about_section layout_padding-bottom layout_padding2-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="images/about-img.jpg" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <form method="POST">
              <div class="detail-box">
                <div class="heading_container">
                  <h2>
                  About Us
                    <hr>
                  </h2>
                </div>
                <p class="readMore">

                  <input class="form-control" type="" name="aboutId" value="" placeholder="Id"><br>
                  <input class="form-control" type="text" name="aboutTitle" value="" placeholder="Title"><br>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="about_description" rows="3" placeholder="About"></textarea>
                  <br>
                  <?php buttonI("btn btn-success","Create" ,"create_about"); ?>
                  <?php buttonI("btn btn-primary","Read" ,"aboutWebData"); ?>
                  <?php buttonI("btn btn-info","Update" ,"update_about"); ?>
                  <?php buttonI("btn btn-danger","Delete" ,"delete_about"); ?>
                </p>

              </div>
            </form>
            
          </div>
          <table class="table table-dark">
                   <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                       if(isset($_POST["aboutWebData"])){
                        $result = getOurInfo();
                        //echo "ilajil cccccc";

                        if($result){
                          while($row = mysqli_fetch_assoc($result)){?>
                            <tr>
                            <td data-id="<?php echo $row['about_id'] ?>"><?php echo $row['about_id'] ?></td>
                            <td data-id="<?php echo $row['about_id'] ?>"><?php echo $row['about_title'] ?></td>
                            <td data-id="<?php echo $row['about_id'] ?>"><?php echo $row['about_text'] ?></td>
                            <td><i class="fas fa-edit btneditProfile"  data-id="<?php echo $row['profile_id'] ?>" style="cursor: pointer; color: lightsalmon;" ></i></td>
                          </tr><?php
                          }
                        }else{
                          echo "Table is empty";
                        }
                    }
                  ?>
                </tbody>
              </table>
        </div>
      </div>
    </section>



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
						  <img src="uploads/gallery_img-01.png" class="img-fluid" alt="Image">
						<div class="box-content">
							<div class="inner-content" >
								<h3 class="title"><a href="wedding-gallery.html">Wedding</h3>
								<span class="post">Latest Photo</a></span>
							</div>
							<ul class="icon">
								<li><a href="uploads/gallery_img-01.png" ><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid photo_b">
					<div class="gallery-single fix">
          <a href="wedding-gallery.html"/><img src="uploads/gallery_img-2.jpeg" class="img-fluid" alt="Image">
						<div class="box-content">
							<div class="inner-content">
								<h3 class="title"><a href="wedding-gallery.html">Models</h3>
								<span class="post">Latest Photo</a></span>
							</div>
							<ul class="icon">
								<li><a href="uploads/gallery_img-2.jpeg" data-rel="prettyPhoto[gal]"><i class="fa fa-search"></i></a></li>
								<li><a href="#"><i class="fa fa-link"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid photo_c">
					<div class="gallery-single fix">
          <a href=""><img src="uploads/gallery_img-07.jpeg" class="img-fluid" alt="Image">
						<div class="box-content">
							<div class="inner-content">
								<h3 class="title"><a href="wedding-gallery.html">Birthday</h3>
								<span class="post">Latest Photo</a></span>
							</div>
							<ul class="icon">
								<li><a href="uploads/gallery_img-07.jpeg" data-rel="prettyPhoto[gal]"><i class="fa fa-search"></i></a></li>
								
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
                  
              </div><!-- end title -->

          <div class="row">
 
            <div class="col-md-4">
                  <div class="services-inner-box">
                      <div class="ser-icon" style="background: #9A1B26;">
                        <i class="flaticon-wedding-photo"></i>
                        </div>
                        <form method="POST" >
                            <label for="fname">ID</label><br>
                            <input type="text" autocomplete="off" id="" name="service_id" placeholder="ID"><br>
                            <label for="fname">Service Title:</label><br>
                            <input type="text" id="title" name="title" placeholder="Title"><br>
                            <label for="lname">Service description:</label><br>
                            <input type="text" id="lname" name="serviceDesc" placeholder="description"><br><br>
                            <?php buttonI("btn btn-success","Create" ,"create"); ?>
                            <?php buttonI("btn btn-primary","Read" ,"read"); ?>
                            <?php buttonI("btn btn-info","Update" ,"update"); ?>
                            <?php buttonI("btn btn-danger","Delete" ,"delete"); ?>
                          </form>
            </div>
          </div><!-- end col -->

          <div class="col-md-8">
            <div class="d-flex table-data">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Service Title</th>
                    <th scope="col">Service Descriptioin</th>
                    <th scope="col" id="co2">Edit</th>
                  </tr>
                </thead>
                <tbody id="tbody">
                <?php
                        if(isset($_POST["read"])){
                          $result = getData();

                          if($result){
                            while($row = mysqli_fetch_assoc($result)){?>
                              <tr>
                                <td data-id="<?php echo $row['service_id'] ?>"><?php echo $row['service_id'] ?></td>
                                <td data-id="<?php echo $row['service_id'] ?>"><?php echo $row['service_title'] ?></td>
                                <td data-id="<?php echo $row['service_id'] ?>"><?php echo $row['services'] ?></td>
                                <td><i class="fas fa-edit btnedit"  data-id="<?php echo $row['service_id'] ?>" style="cursor: pointer; color: lightsalmon;" ></i></td>
                              </tr>
                              <?php
                            }
                          }
                          //echo "ilajil cccccc";
                      }
                  ?>
                  
   
                 </tbody>
              </table>
            </div>
          </div><!-- end col -->

        
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
                    <div class="testi-carousel owl-carousel owl-theme" >

                    
                        <div class="testimonial clearfix" > 
                                <form>  
                                  <figure class="testimonial_img" >
                                      <img src="uploads/testi_01.jpg" alt="" class="img-fluid">
                                  </figure>
                                  <div class="desc">
                                      <h3><i class="fa fa-quote-left"></i><label for="lname">Service description:</label><br><input type="text" id="title" name="title" value="Title"><br> <br> </h3>
                                      <p> <label for="lname">Service Explanation:</label><br><input type="text" id="lname" name="lname" value="description"><br><br></p>
                                  </div>
                                  <div class="testi-meta">
                                        <h4>   <label for="lname">Author</label><br><input type="text" id="Auther" name="auther" value="Auther"><br></label><br> <small> <input type="text" id="title" name="title" value="Title"><br></small></h4>
                                  </div>
                                    <!-- end testi-meta -->
                                      <input type="submit" value="Create">
                                      <input type="submit" value="Update">
                                      <input type="submit" value="Delete">
                                    </form>
                        </div>
                                <!-- end testimonial -->

               
                    
  

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
    <div id="contact" class="section db" >
        <div class="container" >
            <div class="section-title text-center">
                <h3 style="text-transform:uppercase " >contact us to start planning</h3>
                <p>If you're ready to begin this friendship, send us a message. We will respond back with a full guide and some questions to help us get to know you!</p>
            </div><!-- end title -->
            <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="sim-btn btn-hover-new" data-text="Let's Connect" type="submit" style="background: #e45050; border-style: none;" >Let's Connect</button>
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
  <script src="./php/main.js"> </script>

</body>
</html>