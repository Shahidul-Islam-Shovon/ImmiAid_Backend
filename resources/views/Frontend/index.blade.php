<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Aid Immigration Services</title>
     
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
         .header{
          margin-top: -70px;
          background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
         }
         .footer-link {
          color: #ccc;
          text-decoration: none;
          transition: color 0.3s ease;
          }
          .footer-link:hover {
               color: #f39c12;
               text-decoration: none;
          }
     </style>
</head>

<body>


<section class="container-fluid header">
     <div class="row align-items-center d-flex justify-content-between">
          <div class="col-md-4 d-flex justify-content-start">
               <a href="{{route('front_end_index')}}">                   
                    @if($logo)
                   <img style="width:180px; margin-top: -7%;" src="{{ asset('storage/' . $logo->image) }}" alt="Logo Here">
                    @endif
               </a>
          </div>

          <div class="col-md-7 d-flex justify-content-end">
               <h2 style="font-family: 'Roboto Slab', serif; font-weight: 700; margin-top: 5%; white-space: nowrap;">Aid Immigration Services</h2>
          </div>
     </div>
</section>   

<section>
     <div class="col-md-12">
          @include('Frontend.Navbar')
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

                    <div class="carousel-item active">
                         <img style="height: 800px;" src="{{asset('frontend/img/4.jpg')}}" class="d-block w-100" alt="Img 03">
                         <div class="carousel-caption d-none d-md-block custom-slide-right">
                              <h1>Need a UK Immigration Visa</h1>
                              <h5>We provide service that are Accessible according to need</h5>
                               <a href="{{ route('services') }}"><button style="font-size: 20px;" class="btn btn-success mt-4">Our Services</button></a>
                         </div>
                    </div>

                    <div class="carousel-item active" data-bs-interval="10000">
                         <img style="height: 800px;" src="/frontend/img/banner2-1.jpg" class="d-block w-100" alt="img 01">
                         <div class="carousel-caption d-none d-md-block custom-slide-left custom-first">
                              <h1 style="color: whitesmoke;">Explore The World</h1>
                              <h3 style="color: whitesmoke;">we give our best and affordable services</h3>
                              <a href="#"><button style="font-size: 20px;" class="btn btn-success mt-4">Explore the Site</button></a>
                         </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="2000">
                         <img style="height: 800px;" src="/frontend/img/banner3-1.jpg" class="d-block w-100" alt="img 02">
                         <div class="carousel-caption d-none d-md-block custom-slide-left">
                              <h1 style="color: rgba(255, 102, 0, 0.973); font-weight: 900;">Explore Our Best Services</h1>
                              <h3 style="color: rgba(255, 102, 0, 0.973); font-weight: 700;">we give our best and affordable services according to your budget</h3>
                              <a href="{{ route('pricing') }}"><button style="font-size: 20px;" class="btn btn-success mt-4">See Price List</button></a>
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

{{-- why choose us --}}

<!-- Features Section -->
<section class="features py-5">
    <div class="container text-center">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="icon mb-3"><i class="fas fa-user-shield"></i></div>
                <h5>Certified Advisors</h5>
                <p>Our OISC-certified advisors offer legal guidance with full confidentiality.</p>
            </div>
            <div class="col-md-4">
                <div class="icon mb-3"><i class="fas fa-hands-helping"></i></div>
                <h5>Personalized Support</h5>
                <p>We listen, understand, and support your goals every step of the way.</p>
            </div>
            <div class="col-md-4">
                <div class="icon mb-3"><i class="fas fa-globe-europe"></i></div>
                <h5>Global Reach</h5>
                <p>We help clients from all over the world reach their UK immigration goals.</p>
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

                    
                    @include('Frontend.EnquiryForm')
               </div>
          </div>
     </section>


     <section>
     <footer class="footer mt-5" style="background-color: #1e1e1e; color: #ccc; padding: 60px 0 30px; font-family: 'Segoe UI', sans-serif;">
          <div class="container">
               <div class="row">

                    <!-- About Us -->
                    <div class="col-md-3 mb-4">
                         <h5 class="text-white font-weight-bold mb-3">About Us</h5>
                         <p style="font-size: 14px; line-height: 1.7; text-align: justify;">
                              We provide quality services in web design, graphic design, and data entry. Our goal is to help businesses grow through efficient and professional solutions.
                         </p>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-md-3 mb-4">
                         <h5 class="text-white font-weight-bold mb-3">Quick Links</h5>
                         <ul class="list-unstyled" style="font-size: 14px;">
                              <li class="mb-2"><a href="{{route('front_end_index')}}" class="footer-link">Home</a></li>
                              <li class="mb-2"><a href="{{route('services')}}" class="footer-link">Services</a></li>

                              <li class="mb-2"><a href="{{route('contact_us')}}" class="footer-link">Contact Us</a></li>
                         </ul>
                    </div>

                    <!-- Contact Us -->
                    <div class="col-md-3 mb-4">
                         <h5 class="text-white font-weight-bold mb-3">Contact Us</h5>
                         <p style="font-size: 14px; line-height: 1.7;">
                              Email: <a href="mailto:info@aid-immigration.co.uk" class="footer-link">info@aid-immigration.co.uk</a><br>
                              Phone: <span style="color: #f1f1f1;">07501695476</span>
                         </p>
                    </div>

                    <!-- Follow Us -->
                    <div class="col-md-3 mb-4">
                         <h5 class="text-white font-weight-bold mb-3">Follow Us</h5>
                         <p>
                              <a href="https://www.facebook.com/profile.php?id=61569591272112" target="_blank" class="footer-link">
                                   <i class="fab fa-facebook mr-2"></i> Facebook
                              </a><br>
                              
                         </p>
                    </div>
               </div>

               <div class="row mt-4">
                    <div class="col-12 text-center">
                         <p class="mb-0" style="font-size: 13px; color: #aaa;">
                              All Rights Reserved || Design and Developed By
                              <a href="https://www.facebook.com/shahidulislam.khan.9279" target="_blank" style="color: #f39c12; font-weight: 600; text-decoration: none;">
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

<script>
    @if(session('success'))
        document.addEventListener("DOMContentLoaded", function () {
            const formSection = document.getElementById("form-section");
            if (formSection) {
                formSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    @endif
</script>

</body>
</html>
