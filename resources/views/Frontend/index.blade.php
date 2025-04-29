<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>UK Immigration &amp; Nationality Law Advice - Aid Immigration Careers</title>
     
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     
     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="/frontend/img/favicon.png">

     <!-- Google Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

     <!-- Custom CSS -->
     <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

     <style>
         ul {
             list-style: none;
             list-style-type: style color;
         }
         ul li {
             margin-top: 20px;
         }
         ul li h3 {
             color: whitesmoke;
         }
     </style>
</head>

<body>

<!-- Header Section -->
<section class="container-fluid header">
     <div class="row align-items-center d-flex justify-content-between">
          <div class="col-md-4 d-flex justify-content-start">
               <a href="index.html">
                    <img style="width:180px; margin-top: -7%;" src="{{asset('frontend/img/logoo.png')}}" alt="Logo Here">
               </a>
          </div>
          <div class="col-md-7 d-flex justify-content-end">
               <h2 style="font-family: 'Roboto Slab', serif; font-weight: 700; margin-top: 5%; white-space: nowrap;">Aid Immigration Services</h2>
          </div>
     </div>
</section>

<!-- Navbar Section -->
<section>
     <div class="col-md-12">
          <nav class="navbar">
               <div class="container">
                    <div class="nav-left">
                         <span class="logo">Aid Immigration</span>
                    </div>

                    <div class="nav-toggle" onclick="toggleMenu()">☰</div>

                    <ul class="menu" id="menu">
                         <li><a href="{{ route('front_end_index') }}">Home</a></li>
                         <li><a href="{{ route('choose_us') }}">Why Choose Us</a></li>
                         <li><a href="{{ route('services') }}">Services</a></li>
                         <li><a href="{{ route('pricing') }}">Pricing</a></li>
                         <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                         <li><a href="{{ route('review_us') }}">Review Us</a></li>
                         <li><a href="{{ route('sitemap') }}">Sitemap</a></li>
                    </ul>

                    <div class="search-container">
                         <button class="search-icon" id="search-button" onclick="toggleSearch()">
                              <img width="20px" src="{{ asset('frontend/img/search-interface-symbol.png') }}" alt="Search">
                         </button>
                         <input type="text" id="search-box" class="search-box" placeholder="Search..." />
                    </div>
               </div>
               </nav>

     </div>
</section>

<!-- Carousel Section -->
<section>
     <div class="col-md-12">
          <div id="carouselExampleDark" class="carousel carousel-dark slide">
               <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>

               <div class="carousel-inner col-md-4">
                    <div class="carousel-item active" data-bs-interval="10000">
                         <img style="height: 800px;" src="/frontend/img/banner2-1.jpg" class="d-block w-100" alt="img 01">
                         <div class="carousel-caption d-none d-md-block custom-slide-left custom-first">
                              <h1 style="color: whitesmoke;">Explore The World</h1>
                              <h3 style="color: whitesmoke;">we give our best and affordable services</h3>
                              <a href="assests/services.html"><button style="font-size: 20px;" class="btn btn-success mt-4">Our Services</button></a>
                         </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                         <img style="height: 800px;" src="/frontend/img/banner3-1.jpg" class="d-block w-100" alt="img 02">
                         <div class="carousel-caption d-none d-md-block custom-slide-left">
                              <h1 style="color: rgba(255, 102, 0, 0.973); font-weight: 900;">Explore Our Best Services</h1>
                              <h3 style="color: rgba(255, 102, 0, 0.973); font-weight: 700;">we give our best and affordable services according to your budget</h3>
                              <a href="assests/services.html"><button style="font-size: 20px;" class="btn btn-success mt-4">Our Services</button></a>
                         </div>
                    </div>
                    <div class="carousel-item">
                         <img style="height: 800px;" src="/frontend/img/4.jpg" class="d-block w-100" alt="Img 03">
                         <div class="carousel-caption d-none d-md-block custom-slide-right">
                              <h1>Need a UK Immigration Visa</h1>
                              <h5>We provide service that are Accessible according to need</h5>
                              <button style="margin-left: 5%; font-size: 20px;" class="btn btn-success mt-4">Our Services</button>
                         </div>
                    </div>
               </div>

               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
               </button>
          </div>
     </div>
</section>

<!-- Cards Section -->
<section>
     <div class="container mt-5">
          <div class="row g-4">
               <div class="col-md-4">
                    <div class="card hover-card text-center">
                         <img src="/frontend/img/5.jpg" class="card-img-top" alt="Why Aid Immigration">
                         <div class="card-body">
                              <h5 class="card-title">Why Aid Immigration?</h5>
                         </div>
                         <div class="hover-text">
                              <p>Discover why Aid Immigration is the right choice for your needs</p>
                         </div>
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="card hover-card text-center">
                         <img src="/frontend/img/6.jpg" class="card-img-top" alt="Direct Dealing">
                         <div class="card-body">
                              <h5 class="card-title">Direct Dealing</h5>
                         </div>
                         <div class="hover-text">
                              <p>Enjoy seamless direct communication with our team.</p>
                         </div>
                    </div>
               </div>
               <div class="col-md-4">
                    <div class="card hover-card text-center">
                         <img src="/frontend/img/7.jpg" class="card-img-top" alt="Latest Immigration News">
                         <div class="card-body">
                              <h5 class="card-title">Latest Immigration News for UK</h5>
                         </div>
                         <div class="hover-text">
                              <p>Stay updated with the latest immigration news for the UK.</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- Immigration Advisory Banner -->
<section>
     <div class="container-fluid mt-5 our-bg p-3">
          <div class="container p-3">
               <div class="row">
                    <div class="col-md-10">
                         <h3 style="color: aliceblue; font-family: 'Roboto Slab';">Do you want Immigration advisory?</h3>
                         <h5 style="color: rgb(118, 119, 119); font-family: 'Roboto Slab';">Many Immigration Advisors, Same mission Immigration strategy & Advice.</h5>
                    </div>
                    <div class="col-md-2">
                         <button style="font-family: 'Noto Sans';" class="btn btn-light mt-4">Get a Quote</button>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- Content About Company -->
<section>
     <div class="container">
          <div class="row">
               <div class="col-md-8">
                    <h3 style="font-family: 'Noto Sans', sans-serif; margin-top: 13%; font-weight: 800;">ACL IMMIGRATION ADVICE SERVICE</h3>
                    <hr>
                   <p style="font-family: Noto Sans, sans-serif;font-size:15px;color: rgb(109, 105, 105); text-align: justify;"> Aid Immigration careers is UK based OISC regulated Practice , which exclusively offers expert advice and assistance in the areas
                         of UK Immigration and Nationality Law. We are independent form the government. Our immigration and advice is provided
                         confidentially and as per individual requirements.</p>

                         <p style="font-family: Noto Sans, sans-serif;font-size:15px;color: rgb(109, 105, 105); text-align: justify;"> Aid Immigration Careers offer clients a personal and friendly comprehensive solution to their immigration and British Nationality
                         needs. Our experience enables us to provide you with current , transplant and effective advice on the prospect of
                         success and potential difficulties in pursuing an application. Working together , we will use our experience to find a
                         result that matches your needs wherever achievable.</p>

                         <p style="font-family: Noto Sans,sans-serif;font-size:15px;color: rgb(109, 105, 105); text-align: justify;"> Aid Immigration has team of highly skilled and OISC competent advisor , who are fully familiar with current UK law Surrounding
                         Immigration and Nationality Law. An important Part of our business is our relationship with clients which are establish
                         through trust and respect through effective communication and transparency . Many of our client choose to stay with us
                         from initial entry to the UK, through extension and settlement applications to naturalising as British Citizen.</p>
                    <!-- Truncated for brevity, you know the full text! -->
               </div>

               <div class="col-md-4">
                    <img style="margin-top:20%; margin-left:5%;" src="/frontend/img/8.jpg" alt="Image Here">
               </div>
          </div>
     </div>
</section>

 <!-- section for review is pending -->

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 mt-5">
                         <img style="margin-left: -25%;" src="{{asset('frontend/img/9-removebg-preview.png')}}" alt="OISC Logo here">
                         <h4 style="font-family: Noto Sans, sans-serif; font-weight: 700;margin-top: 7%; margin-bottom: 6%;">Contact Details
               
                         </h4>
                         <h5 style="font-family: Noto Sans, sans-serif; font-weight: 700;">Our Address</h5>
                         <p style="font-family: roboto slab">11 George Tilbury House,<br>
                         Godman Road<br>
                         Grays<br>
                         RM16 4TE</p>
                         
                         <h5 style="font-family: Noto Sans, sans-serif; font-size: medium;">Phone: 07501695476</h5>
                         <h5 style="font-family: Noto Sans, sans-serif; font-size: medium;">Email: info@aid-immigration.co.uk</h5>
                    </div>

                    <div class="col-md-8 mt-5">
                         <h4>Submit Enquiry</h4>
                         <form>
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                   </div>
                                   <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone no.</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Phone no.">
                                   </div>
                              </div>
                              <div class="mb-3">
                                   <label for="email" class="form-label">Email Address</label>
                                   <input type="email" class="form-control" id="email" placeholder="Email Address">
                              </div>
                              <div class="mb-3">
                                   <label for="message" class="form-label">Tell Us More</label>
                                   <textarea class="form-control" id="message" rows="5" placeholder="Tell Us More"></textarea>
                              </div>
                              <div class="text-center">
                                   <button type="submit" class="btn btn-dark">Enquiry</button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </section>


     <section>
          <footer class="footer mt-5" style="background-color: #333; color: #fff; padding: 40px 0;">
               <div class="container">
                    <div class="row">
                         <!-- Column 1: About Section -->
                         <div class="col-md-3">
                              <h5 style="color: #fff; font-weight: bold;">About Us</h5>
                              <p style="font-size: 14px; text-align: justify;">
                                   We provide quality services in web design, graphic design, and data entry. Our goal is to
                                   help businesses grow through efficient and professional solutions.
                              </p>
                         </div>
     
                         <!-- Column 2: Quick Links -->
                         <div class="col-md-3">
                              <h5 style="color: #fff; font-weight: bold;">Quick Links</h5>
                              <ul style="list-style: none; padding: 0; font-size: 14px;">
                                   <li><a href="index.html" style="color: #fff; text-decoration: none;">Home</a></li>
                                   <li><a href="assests/services.html" style="color: #fff; text-decoration: none;">Services</a></li>

                                   <li><a href="assests/contact_us.html" style="color: #fff; text-decoration: none;">Contact Us</a></li>
                              </ul>
                         </div>
     
                         <!-- Column 3: Contact Information -->
                         <div class="col-md-3">
                              <h5 style="color: #fff; font-weight: bold;">Contact Us</h5>
                              <p style="font-size: 14px;">
                                   Email: <a href="mailto:info@aid-immigration.co.uk"
                                        style="color: #fff; text-decoration: none;">info@aid-immigration.co.uk</a><br>
                                   Phone: 07501695476<br>
                                  
                              </p>
                         </div>
     
                         <!-- Column 4: Follow Us -->
                         <div class="col-md-3">
                              <h5 style="color: #fff; font-weight: bold;">Follow Us</h5>
                              <a href="https://www.facebook.com/profile.php?id=61569591272112" target="_blank"
                                   style="color: #fff; text-decoration: none; margin-right: 10px;">
                                   <i class="fab fa-facebook"></i> Facebook
                              </a><br>
                              
                              <a href="#" target="_blank"
                                   style="color: #fff; text-decoration: none; margin-right: 10px;">
                                   <i class="fab fa-twitter"></i> Twitter
                              </a><br>
                              <a href="#" target="_blank"
                                   style="color: #fff; text-decoration: none; margin-right: 10px;">
                                   <i class="fab fa-instagram"></i> Instagram
                              </a>
                         </div>
                    </div>
     
                    <div class="row mt-4">
                         <div class="col-12 text-center">
                              <p class="trademark" style="margin: 0; font-size: 14px;">
                                   All Rights Reserved || Design and Developed By
                                   <a href="https://www.facebook.com/shahidulislam.khan.9279" target="_blank"
                                        style="color: #f39c12; text-decoration: none;">
                                        Shahidul Islam Shovon
                                   </a>
                              </p>
                         </div>
                    </div>
               </div>
          </footer>
     </section>


<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="{{asset('frontend/js/index.js')}}"></script>

</body>
</html>
