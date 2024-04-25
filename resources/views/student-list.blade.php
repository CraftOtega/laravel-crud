 <html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>student-list</title>
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
</head>



<body>

    <div class="container" style="margin-top: 20px;">
        <div class="row">

          @if(Session::has('success'))
          <div class="alert alert-info alert-dismissible fade show">
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              <strong> {{ Session::get('success') }}</strong>  
            </div>
       @endif



     <div class="col-md-12">

   <a href="{{ url('add-student') }}" class="btn btn-primary"> Add</a> 
   </div>


        </div>
    </div>



 
    
<div class="w3-container">

  <h2>student list  Table</h2>
  <div class="w3-responsive">
  <table class="w3-table-all">
  <tr>
    <th>#</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Action</th>
   
  </tr>
  @php
  $i=1;


 // {{ url('edit-student/'.$stu->id) }}
   @endphp

  @foreach ($data as $stu )
      
  <tr> 
    
     
    <td>{{ $i++}}</td>
    <td>{{ $stu->name }}</td>
    <td>{{ $stu->email }}</td>
    <td>{{ $stu->phone }}</td>
    <td>{{ $stu->address }}</td> 


    <td> <a href="{{ url('edit-student', $stu->id) }}" class="btn btn-primary "> edit</a> |<a href="{{ url('delete-student/'.$stu->id) }}" class="btn btn-danger">delete</a></td>
  
  </tr>
  @endforeach
 
 
  </table>
  </div>
  

</body>
</html>