         <!DOCTYPE html>
         <html lang="en">
         <head>
          <meta charset="utf-8">
           <title>Eye+ Eyewear</title>
          <meta content="width=device-width, initial-scale=1.0" name="viewport">
         <meta content="" name="keywords">
          <meta content="" name="description">

         <!-- Favicon -->
          <link href="img/favicon.ico" rel="icon">

           <!-- Google Web Fonts -->
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
           <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

         <!-- Icon Font Stylesheet -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  
         <!-- Libraries Stylesheet -->
         <link href="lib/animate/animate.min.css" rel="stylesheet">
          <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
         <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

         <!-- Customized Bootstrap Stylesheet -->
         <link href="css/bootstrap.min.css" rel="stylesheet">

          <!-- Template Stylesheet -->
         <link href="css/style.css" rel="stylesheet">
         </head>

         <body>
          <!-- Spinner Start -->
         <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
         <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
         </div> -->
         <!-- Spinner End -->


         <!-- Topbar Start -->
         <div class="container-fluid bg-dark px-0">
         <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+312 345 6789</span>
                </div>
            </div>
          </div>
         </div>
         <!-- Topbar End -->


         <!-- Navbar Start -->
         <?php
         include("./common/header.php");
         ?>
         <!-- Navbar End -->


         <!-- Page Header Start -->
         <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
         <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
         </div>
         </div>
         <!-- Page Header End -->
           <!-- Product Start -->
         <div class="container-xxl py-5">
         <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Our Top Branded Sunglasses Collection.</h1>
            </div>
            <div class="row gx-4">
            <?php
                include("./include/config.php");
                $qry="SELECT * FROM product";
                $res=mysqli_query($conn,$qry);
                echo mysqli_num_rows($res);
               while($row=mysqli_fetch_assoc($res)){
            ?>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="./image/product/<?php echo $row['productimage'] ?>" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="single-product.php?productid=<?php echo $row['id'] ?>"><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href="addcart.php?productid=<?php echo $row['id'] ?>"><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href=""><?php echo $row['productname'] ?></a>
                            <span class="text-primary me-1"></span>
                            <span class="text-decoration-line-through"></span>
                        </div>
                    </div>
                </div>
                <?php
               }
               ?>
              </div>
          </div>
         </div>
         <!-- Product End -->
         <!-- Footer Start -->
          <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
         <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Eye+ eyewear,Radha Krishna Complex,Dharmendra Road,Rajkot.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+312 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>Eye+eyewear@gmail.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Sign-up here for getting connected to our website.For any change of product or replacement or any issue for our brands and products u can mail us...</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
          </div>
          </div>
         <!-- Footer End -->

         <!-- Copyright Start -->
         <div class="container-fluid bg-secondary text-body copyright py-4">
          <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Eye+ Eyewear</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">Shanti Odedra</a>
                </div>
            </div>
          </div>
         </div>
         <!-- Copyright End -->
          <!-- Back to Top -->
           <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
          <!-- JavaScript Libraries -->
         <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
         <script src="lib/wow/wow.min.js"></script>
         <script src="lib/easing/easing.min.js"></script>
         <script src="lib/waypoints/waypoints.min.js"></script>
          <script src="lib/owlcarousel/owl.carousel.min.js"></script>
         <script src="lib/counterup/counterup.min.js"></script>
          <script src="lib/parallax/parallax.min.js"></script>
         <script src="lib/lightbox/js/lightbox.min.js"></script>
         <!-- Template Javascript -->
         <script src="js/main.js"></script>
          </body>
          </html>