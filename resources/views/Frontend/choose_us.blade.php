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
          .chose_p{
               text-align: justify;
               margin-top: 3%;
          }
          .header{
          margin-top: -70px;
          background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
          margin-bottom: -25px;
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
          <h2 class="choose">Why Choose Us ?</h2>
      </section>

      <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-12 mt-4">
                         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="{{route('front_end_index')}}">Home</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">Why Choose Us</li>
                              </ol>
                         </nav>
                    </div>
                    <div class="col-md-7 mt-5 mb-3">
                         <h4>Why Choose Us ?</h4>
                         <p class="chose_p" style="font-size: 15px;font-weight: 380;color: rgb(85, 84, 84);">We are regulated by OISC that’s gives you mental peace that you are dealing with authorized competent personals and
                         experience who can be your trusted advisor. We are your best chance for a successful UK Immigration & Visa application
                         because: </p>
                         
                         <p class="chose_p" style="font-size: 15px;font-weight: 380;color: rgb(85, 84, 84);">We have extensive experience in handling most of categories of Immigration & Visas applications types and have receive
                         successful outcomes
                         we provide you an accurate and detailed specified documentation advise for preparing your case.</p>
                         
                         <p class="chose_p" style="font-size: 15px;font-weight: 380;color: rgb(85, 84, 84);">We assess carefully your documentation and strengthens the weakness, by advising you alternate additional documentation,
                         which helps not getting queries and speeds up process with Home Office giving favorable and immediate conclusion.We have
                         in-house English, Hindi, Urdu, Gujarati, Marathi, speaking and understanding Punjabi adviser, so you can have better
                         comfortable conversation.</p>
                         
                         <p class="chose_p" style="font-size: 15px;font-weight: 380;color: rgb(85, 84, 84);">You are direct connected to the Immigration Adviser over the Mobile Phone unlike others wherein you would have to go
                         through the receptionist.</p>
                         
                         <p class="chose_p" style="font-size: 15px;font-weight: 380;color: rgb(85, 84, 84);">We only engage clients if you have a likely chance of success in your immigration case, hence, our success rate is very
                         high.
                         Our fees are set at a fixed rate for unlimited assistance until late hours and until your case is concluded and even
                         after that.
                         Our fee is reasonable and affordable compared to other solicitors firms in your local area.</p>
                         
                         <p class="chose_p" style="font-size: 15px;font-weight: 380;color: rgb(85, 84, 84);">We have strong ethical standards. Your success is our success
                         Most of our clients refer us to their eligible friends and family to help them for Immigration Advice.</p>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 mt-5">
                         <img src="{{asset('frontend/img/11-1.jpg')}}" alt="chose us image here">
                    </div>
               </div>
          </div>
      </section>

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