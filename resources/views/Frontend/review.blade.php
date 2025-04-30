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

     <!-- Owl Carousel CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

     <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
     <style>
           .choose{
               text-align: center;
               font-family: Noto Sans;
               font-size: 22px;
               font-weight: 700;
          }
          .background{
               background-color: bisque;
               padding: 59px;
          }

          .service_text {
               border-bottom: 1px solid black;
               margin-top: 7%;
               padding: 10px;
               width: fit-content;
          }
          

          .form-container {
          background-color: #fff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
          width: 100%;
          max-width: 400px;
          }

          .review-form .form-group {
          margin-bottom: 15px;
          }

          .review-form label {
          display: block;
          font-weight: bold;
          margin-bottom: 5px;
          }

          .review-form input,
          .review-form textarea {
          width: 100%;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 4px;
          font-size: 14px;
          }

          .review-form textarea {
          resize: none;
          }

          .rating {
          display: flex;
          flex-direction: row-reverse; /* Keeps the stars in reverse order (5 to 1) */
          justify-content: flex-end;  /* Aligns stars to the right */
          gap: 5px;                  /* Adds spacing between stars */
          }

          .rating input {
          display: none; /* Hides the radio buttons */
          }

          .rating label {
          font-size: 24px; /* Makes the stars larger */
          color: #ccc;     /* Default star color */
          cursor: pointer; /* Adds a pointer cursor for interactivity */
          transition: color 0.2s ease; /* Smooth color transition */
          }

          .rating input:checked ~ label, /* Highlight stars for selected rating */
          .rating label:hover,
          .rating label:hover ~ label {
          color: #f5b301; /* Highlighted star color */
          }

          .submit-btn {
          background-color: #000;
          color: #fff;
          border: none;
          padding: 10px 15px;
          font-size: 16px;
          border-radius: 4px;
          cursor: pointer;
          width: 100%;
          text-align: center;
          }

          .submit-btn:hover {
          background-color: #333;
          }
          .star {
               transition: color 0.2s;
          }
          .star.selected,
          .star.hovered {
               color: gold !important;
          }
          .review-card {
          background: #fff;
          border-radius: 12px;
          padding: 20px;
          box-shadow: 0 4px 10px rgba(0,0,0,0.1);
          transition: transform 0.3s ease;
          }
          .review-card:hover {
          transform: translateY(-5px);
          }
          .review-header {
          display: flex;
          justify-content: space-between;
          align-items: center;
          }
          .star-rating .star {
          font-size: 18px;
          color: #ccc;
          }
          .star-rating .filled {
          color: gold;
          }
          .review-title {
          font-size: 16px;
          margin-top: 10px;
          font-weight: 600;
          color: #333;
          }
          .review-body p {
          font-size: 14px;
          color: #555;
          margin-top: 10px;
          }

     </style>
</head>

<body>

     <section class="container-fluid header">
          <div class="row align-items-center d-flex justify-content-between">
               <!-- Logo on the left -->
               <div class="col-md-4 d-flex justify-content-start">
                    <a href="{{route('front_end_index')}}">
                         <img style="width:180px; margin-top: -7%;" src="{{asset('frontend/img/logoo.png')}}" alt="Logo Here">
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

                   
               </div>
               </nav>
               </div>
          </div>
     </section>


     <!-- main start -->
      <div class="gap_fixing"></div>
     <section class="background">
          <h2 class="choose">Review Us</h2>
     </section>

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-12 mt-4">
                         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="{{route('front_end_index')}}">Home</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">Review</li>
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
                         
                         @if(session('success'))
                              <div class="alert alert-success">
                              {{ session('success') }}
                              </div>
                         @endif

                         <div class="form-container">
                             <form action="{{ route('review.store') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                   <label><strong>Name</strong></label>
                                   <input type="text" name="name" class="form-control" placeholder="Enter your name"required value="{{ old('name') }}">
                                   @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                              </div>

                              <div class="form-group">
                                   <label><strong>Email</strong></label>
                                   <input type="email" name="email" class="form-control" placeholder="Enter your email" required value="{{ old('email') }}">
                                   @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                              </div>

                              <div class="form-group">
                                   <label><strong>Review Title</strong></label>
                                   <input type="text" name="title" class="form-control" placeholder="Enter review title" required value="{{ old('title') }}">
                                   @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                              </div>

                              <div class="form-group">
                                   <label><strong>Rating</strong></label><br>
                                   <div id="stars" style="font-size: 1.8rem; cursor: pointer; color: #ccc;">
                                        @for($i = 1; $i <= 5; $i++)
                                             <span class="star" data-value="{{ $i }}">&#9733;</span>
                                        @endfor
                                   </div>
                                   <input type="hidden" name="rating" id="rating" value="1" value="{{ old('rating') }}"> <!-- default 1 -->
                                   @error('rating')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                              </div>

                              <div class="form-group">
                                   <label><strong>Review Content</strong></label>
                                   <textarea name="content" class="form-control" placeholder="Write your review here" rows="4"></textarea value="{{ old('content') }}">
                                   @error('content')
                                        <div class="text-danger">{{ $message }}</div>
                                   @enderror
                              </div>

                              <button type="submit" class="btn btn-dark btn-block mt-3">Submit</button>
                              </form>
                             
                         </div>
                    </div> 
                    
                    <div class="col-md-6 text-center">
                         <h2>See Users Review Here</h2>

                         <div class="mt-5 owl-carousel review-carousel text-white">
                                   @foreach ($reviews as $review)
                                   <div style="height: 160px; width:180px;" class="review-card bg-dark">
                                        {{-- নাম --}}
                                        <div class="review-line">
                                             <strong></strong> {{ $review->name ?? 'Anonymous' }}
                                        </div>

                                        {{-- রেটিং --}}
                                        <div class="review-line">
                                             <strong></strong>
                                             @for ($i = 1; $i <= 5; $i++)
                                                  @if ($i <= $review->rating)
                                                  <span style="color: gold;">&#9733;</span>
                                                  @else
                                                  <span style="color: #ccc;">&#9734;</span>
                                                  @endif
                                             @endfor
                                        </div>

                                        {{-- টাইটেল --}}
                                        <div class="review-line">
                                             <strong></strong> {{ $review->title }}
                                        </div>

                                        {{-- কনটেন্ট --}}
                                        <div class="review-line">
                                             <strong></strong> {{ $review->content }}
                                        </div>
                                   </div>
                              @endforeach
                         </div>
                                            
                    </div>                           
                    
               </div>
          </div>
     </section>
  

     <!-- main end -->


     <!-- footer section start -->
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
                                   <li><a href="assests/services.html"
                                             style="color: #fff; text-decoration: none;">Services</a></li>
     
                                   <li><a href="assests/contact_us.html" style="color: #fff; text-decoration: none;">Contact
                                             Us</a></li>
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
     
                              <a href="#" target="_blank" style="color: #fff; text-decoration: none; margin-right: 10px;">
                                   <i class="fab fa-twitter"></i> Twitter
                              </a><br>
                              <a href="#" target="_blank" style="color: #fff; text-decoration: none; margin-right: 10px;">
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

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>

     <script src="{{asset('frontend/js/index.js')}}"></script>

</body>

</html>