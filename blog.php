<?php
// Do not modify anything yet
$loca = dirname(__FILE__);
include($loca.'/admin/route.php');
$blog = new BlogData();

// with a slash at the end
$blog->my['siteurl'] = 'https://www.arlingtontxairductcleaning.com/';
$blog->my['blogtitle'] = 'Blog - Services For Air Duct Cleaning';
$blog->my['blogdescription'] = 'Blog - Our experienced technicians can provide quick and effective air duct repairs with only a phone call.';

// Checker
$blog->checkall();
$blog->sitemap();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<base href="https://www.arlingtontxairductcleaning.com/" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <?php
// in head instead of ( Title, description, keywords, canonical )
$blog->head(); ?>

    <meta name="revisit-after" content="1 month"/>
    <meta name="distribution" content="Global"/>
    <meta name="rating" content="Safe For Kids"/>
    <meta name="robots" content="index,all"/>
    <meta name="copyright" content="Services For Air Duct Cleaning"/>
    <meta name="classification" content="Air Duct"/>
    <link rel="apple-touch-icon" href="images/apple-touch-icon.webp">
  
    <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
    <meta property="og:title" content="Blog - Services For Air Duct Cleaning" />
    <meta property="og:description" content="Blog - Our experienced technicians can provide quick and effective air duct repairs with only a phone call." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.arlingtontxairductcleaning.com/" />
    <meta property="og:image" content="https://www.arlingtontxairductcleaning.com/images/favicon.webp" />
    <meta property="og:site_name" content="Services For Air Duct Cleaning">
    <meta name="twitter:card" content=summary_large_image>
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="Blog - Services For Air Duct Cleaning">
    <meta name="twitter:description" content="Blog - Our experienced technicians can provide quick and effective air duct repairs with only a phone call.">
    <meta name="twitter:image" content="https://www.arlingtontxairductcleaning.com/images/favicon.webp"/>
    <script type="application/ld+json">
        {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "name": "Services For Air Duct Cleaning",
        "image": "https://www.arlingtontxairductcleaning.com/images/favicon.webp",
        "url": "https://www.arlingtontxairductcleaning.com/",
        "telephone": "713-487-8471 ",
        "email" : "service@arlingtontxairductcleaning.com",
        "description": "Blog - Our experienced technicians can provide quick and effective air duct repairs with only a phone call.",
        "address": {
        "@type": "PostalAddress", 
        "streetAddress": "7155 Old Katy Rd",
        "addressLocality": "Houston",
        "addressRegion": "TX",
        "postalCode": "77024",
        "addressCountry": "USA"
        },
        "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "335",
        "bestRating": "5",
        "worstRating": "3"
        },
        "priceRange" : "$"
        }
      </script>

   <!-- End Meta -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700&family=Merriweather:wght@700&family=Oswald:wght@600&family=Paytone+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@500&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <!-- fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style media="screen">
/*Blog*/
.blogbox{text-align:justify;padding:20px;background-color:#FFF;box-sizing:border-box;clear:both;overflow:hidden;margin-bottom:15px;box-shadow:3px 3px 7px rgba(0,0,0,0.2)}
.blogbox .blogimg img {float: right; width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.blogbox .read-more a{background-color:#ccc;color:#2D2D2D;padding:10px;border-radius:5px;border:1px solid #2D2D2D}
.blogbox .read-more a:hover {background-color:#2D2D2D;color:#FFF;letter-spacing: 2px;padding:10px 15px}
.blogpost {text-align: justify;padding:20px;background-color: #FFF;box-sizing: border-box}
.blogpost h1, .blogbox h1 {margin:0;font-size:28px;color:#222;}
.blogpost h2, .blogbox h2 {margin:0;font-size:24px;color:#222;}
.blogpost .blog_wrapper img {float: right; max-width: 35%; height: auto; margin: 15px;box-shadow: 0 0 3px rgba(0,0,0,0.8)}
.socialbox{overflow:hidden;position:relative;text-align:center;width:100%;}
.social-share-btns{display:inline-block;overflow:hidden}
.social-share-btns .share-btn{float:left;margin:0 5px;padding:8px 16px;border-radius:3px;color:#fff;font-size:14px;line-height:18px;vertical-align:middle;transition:background .2s ease-in-out;display:flex;align-items:center;}
.social-share-btns .share-btn svg {fill:currentColor;height:1rem;width:1rem;margin-right:10px;}
.share-btn{background-color:#95a5a6}
.share-btn:hover{background-color:#798d8f}
.share-btn-twitter{background-color:#00aced}
.share-btn-twitter:hover{background-color:#0087ba}
.share-btn-facebook{background-color:#3b5998}
.share-btn-facebook:hover{background-color:#2d4373}
.share-btn-linkedin{background-color:#007bb6}
.share-btn-linkedin:hover{background-color:#005983}
@media only screen and (max-width:700px){
.blogbox .blogimg img{max-width:90%;width:auto}
}
</style>
</head>

<body>
<!-- Topbar Start -->
<div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>713-487-8471</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>service@arlingtontxairductcleaning.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fa-brands fa-blogger-b"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5" >
            <div style="margin-left: 80px;">
                <a href="https://www.arlingtontxairductcleaning.com/" class="navbar-brand ml-lg-3 " >

                    <img src="images/logo.webp" alt="logo.webp" title="Services For Air Duct Cleaning" style="width: 65px; height: 65px;">
                    <a href="https://www.arlingtontxairductcleaning.com/" style="text-decoration: none; font-size: 16px; color: #1f1f2e; font-weight: bold;">Services For Air Duct Cleaning</a>


                </a>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="https://arlingtontxairductcleaning.com
                    /" class="nav-item nav-link active">Home</a>
                    <a href="dryer-vent-cleaning.html" class="nav-item nav-link">Dryer Vent </a>
                    <a href="air-conditioner.html" class="nav-item nav-link">Air conditioner </a>
                    <a href="blog/" class="nav-item nav-link">Blog</a>

                    <a href="contact-us.html" class="nav-item nav-link">Contact Us</a>
                </div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron  mb-5" style="height: 600px;">
        <div class="container-fluid text-left" style="margin-top: 150px;">
            <div class="row">
<div class="col-lg-6">
    <h1 class="text-primary mb-4">Services For Air Duct Cleaning</h1>
            <span class="text-white display-3 mb-5" style="font-size: 20px; ">At Services Air Duct Cleaning, we take great pride in using a comprehensive and efficient air duct cleaning technique to ensure your HVAC system performs at peak efficiency and improves indoor air quality.</span>
            <div class="ms-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group" >

                    <div class="input-group-append ">
                        <a class="btn btn-primary px-3" style="margin-top: 20px; text-decoration: none; margin-right: 10px;" href="tel:7134878471"><i class="fa-solid fa-phone"></i> 713-487-8471</a>
                        <a class="btn btn-primary px-3" style="margin-top: 20px; text-decoration: none;" href="tel:7134878471"><i class="fa-solid fa-phone"></i>  214-430-4923</a>
                    </div>
                </div>
</div>
            </div>

    
            
            </div>
        </div>
    </div>
    <!-- Header End -->




    <div class="container">
  <div class="row"><div class="col-12">
  <?php
// in content box
$blog->content(); ?>
  </div>
</div>
</div>





<!-- start footer -->




 <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h3 class="text-primary mb-4">Get In Touch</h3>
                            <p><i class="fa fa-map-marker-alt mr-2" style="color: #FF4800;"></i>8420 Abrams Rd #202, Dallas, TX 75243</p>
                            <p><i class="fa fa-map-marker-alt mr-2" style="color: #FF4800;"></i>7155 Old Katy Rd, Houston, TX 77024</p>
                            <p><i class="fa fa-phone-alt mr-2" style="color: #FF4800;"></i>713-487-8471</p>
                            <p><i class="fa fa-phone-alt mr-2" style="color: #FF4800;"></i> 214-430-4923</p>


                        </div>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <h3 class="text-primary mb-4">Quick Links</h3>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="https://www.arlingtontxairductcleaning.com/"><i class="fa fa-angle-right mr-2" style="color: #FF4800;"></i>Home</a>
                                <a class="text-white mb-2" href="dryer-vent-cleaning.html"><i class="fa fa-angle-right mr-2" style="color: #FF4800;"></i>Dryer Vent</a>
                                <a class="text-white mb-2" href="air-conditioner.html"><i class="fa fa-angle-right mr-2" style="color: #FF4800;"></i>Air Conditioner</a>
                                <a class="text-white mb-2" href="blog/"><i class="fa fa-angle-right mr-2" style="color: #FF4800;"></i>Blog</a>
                                <a class="text-white" href="contact-us.html"><i class="fa fa-angle-right mr-2" style="color: #FF4800;"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">

                    <a href="https://www.arlingtontxairductcleaning.com/">
                        <img src="images/logo.webp" alt="logo" title="Services For Air Duct Cleaning" style="width: 13%; height: 23%; margin-right: 15px;">
                    </a>


                    <span style="color: white;">Services For Air Duct Cleaning</span>
                    <br> <br>

                    <p><i class="fa fa-envelope mr-3 mt-4" style="color: #FF4800;"></i>service@arlingtontxairductcleaning.com</p>
                    <p><i class="fa-solid fa-earth-americas mr-3" style="color: #FF4800;"></i> www.arlingtontxairductcleaning.com</p>
                    <div class="d-flex justify-content-start mt-4 ">
                        <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                    </div>

                </div>
            </div>
        </div>

    </div>




    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5 " style="border-color: #3E3E4E !important; ">
        <div class="row">
            <div class="col-12 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white text-center">&copy; All Rights Reserved... www.arlingtontxairductcleaning.com

                </p>
            </div>

        </div>
    </div>
    <!-- Footer End -->





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <!-- live chat -->
    <script id=af367f62fd3aaeb7765a213daaecd73b src="//webserviceexpress.com/script.php?id=af367f62fd3aaeb7765a213daaecd73b" defer></script>

</body>
</html>