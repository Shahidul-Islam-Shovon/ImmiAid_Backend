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

     <link rel="stylesheet" href="../css/style.css">
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

     </style>
</head>

<body>

     <section class="container-fluid header">
          <div class="row align-items-center d-flex justify-content-between">
               <!-- Logo on the left -->
               <div class="col-md-4 d-flex justify-content-start">
                    <a href="../index.html">
                         <img style="width:180px; margin-top: -7%;" src="../img/logoo.png" alt="Logo Here">
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
                    <div class="">
                         <nav class="navbar">
                              <ul class="menu">
                                   <li><a href="../index.html">Home</a></li>
                                   <li><a href="choose_us.html">Why Choose Us</a></li>
                                   <li><a href="services.html">Services</a></li>
                                   <li><a href="pricing.html">Pricing</a></li>
                                   <li><a href="contact_us.html">Contact Us</a></li>
                                   <li><a href="review.html">Review Us</a></li>
                                   <li><a href="sitemap.html">Sitemap</a></li>
                              </ul>
                              <div class="search-container">
                                   <button class="search-icon" id="search-button">
                                        <img width="20px" src="../img/search-interface-symbol.png" alt="">
                                   </button>
                                   <input type="text" id="search-box" class="search-box" placeholder="Search..." />
                              </div>
                         </nav>
                    </div>
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
                                   <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
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
                    <div class="col-md-8">
                         <div class="form-container">
                              <form action="#" method="POST" class="review-form">
                                   <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                                   </div>
                                   <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                   </div>
                                   <div class="form-group">
                                        <label for="title">Review Title</label>
                                        <input type="text" id="title" name="title" placeholder="Enter review title">
                                   </div>
                                   <div class="form-group">
                                        <label for="rating">Rating</label>
                                        <div class="rating">
                                             <input type="radio" name="rating" id="star5" value="5">
                                             <label for="star5">&#9733;</label>
                                             <input type="radio" name="rating" id="star4" value="4">
                                             <label for="star4">&#9733;</label>
                                             <input type="radio" name="rating" id="star3" value="3">
                                             <label for="star3">&#9733;</label>
                                             <input type="radio" name="rating" id="star2" value="2">
                                             <label for="star2">&#9733;</label>
                                             <input type="radio" name="rating" id="star1" value="1">
                                             <label for="star1">&#9733;</label>
                                        </div>
                                   </div>
                                   <div class="form-group">
                                        <label for="content">Review Content</label>
                                        <textarea id="content" name="content" rows="4" placeholder="Write your review here"></textarea>
                                   </div>
                                   <button type="submit" class="submit-btn">Submit</button>
                              </form>
                         </div>
                    </div>
                    <div class="col-md-6">

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


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>

     <script src="../js/index.js"></script>
</body>

</html>