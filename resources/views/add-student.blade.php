<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>add student</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/w3css/w3.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.7.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>



.form-control{
        width: 400px;
        display: block;
        
        }
        
        
        .content {
        max-width: 500px;
        margin: auto;
        background: white;
        padding: 10px;
        }
        

  </style>
</head>



<body>

    <div class="container" style="margin-top: 20px;">
     <div style="display:grid;align-item:center;justify-content:center;">
        @if ($errors->any())
        <div style="color:red;text-align:center;">

             somethings went wrong ...
             <ul style="border:1px solid red;font-Weight:300;font-size:20px;">
              @foreach ($errors->all() as $error )
                
              <li> {{ $error }}</li>
              @endforeach
             
             </ul>

        </div>
          
        @endif

      </div>
        <div class="row">
     <div class="col-md-12">

   <a href="#" class="btn btn-primary"> Add Student</a> <br>

<div class="content">
   <form  action="{{ url('save-student') }}"   enctype="multipart/form-data"  method="post" >
    
@csrf

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        <!--  testing this type of error -->
         @error('name')
          {{$message}}
         @enderror
      </div>


    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="text" class="form-control"  name="email" id="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="phone">Phone No:</label>
        <input type="text" class="form-control"  name="phone" id="phone" value="{{ old('phone') }}">
      </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control"  name="address" id="address" value="{{ old('address') }}">
    </div><br><br>
    
    <button type="submit" class="btn btn-default">Submit</button>


    <a href="{{ url('student-list') }}"> back</a>
  </form>
</div>






   </div>
        </div>
    </div>


































</body>
</html>