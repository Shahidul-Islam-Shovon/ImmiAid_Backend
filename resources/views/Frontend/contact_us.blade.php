<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>UK Immigration &amp; Nationality Law Advice - Aid Immigration Careers</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="icon" type="image/x-icon" href="img/favicon.png">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

     <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
     <style>
           .choose{
               text-align: center;
               font-family: Noto Sans;
               font-size: 22px;
               font-weight: 700;
          }
          .background{
               background:linear-gradient(1675deg, #efd5ff 7%, #515ada 86%);
               padding: 60px;
               color:white;
          }

          .service_text {
               border-bottom: 1px solid black;
               margin-top: 7%;
               padding: 10px;
               width: fit-content;
          }
          .header{
          margin-top: -70px;
          margin-bottom: -25px;
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
               <!-- Logo on the left -->
               <div class="col-md-4 d-flex justify-content-start">
                    <a href="{{route('front_end_index')}}">
                         @if($logo)
                              <img style="width:180px; margin-top: -7%;" src="{{ asset('storage/' . $logo->image) }}" alt="Logo Here">
                         @endif
                    </a>
               </div>
               <!-- Text on the right -->
               <div class="col-md-7 d-flex justify-content-end">
                    <h2 style="font-family: 'Roboto Slab', serif; font-weight: 700; margin-top: 5%; white-space: nowrap;">Aid
                         Immigration Services</h2>
               </div>
          </div>
     </section>


     </section>

     <section>
          <div class="mt-4">
               <div class="col-md-12">
                     @include('Frontend.Navbar')
               </div>
          </div>
     </section>


     <!-- main start -->
      <div class="gap_fixing"></div>
     <section class="background">
          <h2 class="choose">Contact Us</h2>
     </section>

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-12 mt-4">
                         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="{{route('front_end_index')}}">Home</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                              </ol>
                         </nav>
                    </div>                  
               </div>
          </div>
     </section>


     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-6">
                         <h4 class="service_text">Contact Us</h4>
                         <br>
                         <p style="color:rgb(6, 100, 69)">Company Registration Address</p>
                         <p style="font-family: roboto slab">11 George Tilbury House,<br>
                              Godman Road<br>
                              Grays<br>
                              RM16 4TE</p>
                         <br>
                         <p>Phone : 07501695476</p>
                         <p>Email : info@aid-immigration.co.uk</p>
                    </div>
                    <div class="col-md-6 mt-5">
                    <iframe style="border:1px solid rgb(214, 211, 211)"
                         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.252649148961!2d0.3694782757166346!3d51.490231011958564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8b7de8c80c0c7%3A0xa7ef2c88ffae12ee!2sGodman%20Rd%2C%20Grays%2C%20UK!5e0!3m2!1sen!2sbd!4v1732772758801!5m2!1sen!2sbd"
                         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                         referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
               </div>
          </div>
     </section>

     <section>
          <div class="container mt-3">
               <div class="row">
                    <div class="col-md-4 mt-5">
                         <img style="margin-left: -25%;" src="{{asset('frontend/img/9-removebg-preview.png')}}" alt="OISC Logo here">
                         <h4 style="font-family: Noto Sans, sans-serif; font-weight: 700;margin-top: 7%; margin-bottom: 6%;">
                              Contact
                              Details

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





     <!-- main end -->


     <!-- footer section start -->
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


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>

     <script src="{{asset('frontend/js/index.js')}}"></script>
</body>

</html>