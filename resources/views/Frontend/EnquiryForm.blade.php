<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="col-md-8 mt-5" id="form-section">
                         <h4>Submit Enquiry</h4>

                        @if(session('success'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   {{ session('success') }}
                                   
                              </div>
                         @endif

                    <form action="{{route('enquiry.store')}}" method="POST">
                              @csrf 
                              <div class="row mb-3">
                                   <div class="col-md-6">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required name="name">
                                   </div>
                                   <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone no.</label>
                                        <input type="text" class="form-control" id="phone" placeholder="Phone no." name="phone">
                                   </div>
                              </div>
                              <div class="mb-3">
                                   <label for="email" class="form-label">Email Address</label>
                                   <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                              </div>
                              <div class="mb-3">
                                   <label for="message" class="form-label">Tell Us More</label>
                                   <textarea name="message" class="form-control" id="message" rows="5" placeholder="Tell Us More"></textarea>
                              </div>
                              <div class="text-center">
                                   <button type="submit" class="btn btn-dark">Enquiry</button>
                              </div>
                         </form>


                    </div>
</body>
</html>