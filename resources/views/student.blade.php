<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Student Mangement System</title>
  </head>
  <body>
@include('navbar')
@if($layout=='index')
  <div class="container-fluid mt-4">
  <section class="col-md-5">
  <div class="row">
      @include('stdlist')
  </section>
  <section class="col"></section>
  </div>
  </div>
@elseif($layout=='create')
<div class="container-fluid mt-4">
    <div class="row">
  <section class="col">
      @include('stdlist')
  </section>
  <section class="col-md-5">
  <div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2019/07/15/09/21/learn-4338932__340.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-text">Enter Student's Information.</p>
    <form action="{{url('/store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>CNE</label>
    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input name="firstName" type="text" class="form-control" placeholder="Enter First name ">
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input name="lastName" type="text" class="form-control" placeholder="Enter Last name">
  </div>

  <div class="form-group">
    <label>Age</label>
    <input name="age" type="text" class="form-control" placeholder="Enter age">
  </div>

  <div class="form-group">
    <label>Speciality</label>
    <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
  </div>

  <div class="form-group">
    <input  type="submit" class="btn btn-success" value="Save">
    <input  type="reset" class="btn btn-info" value="Reset">
  </div>
  
</form>
  
  </div>
  </div>
  </section>
  </div>
  </div>
@elseif($layout=='show')
<div class="container-fluid mt-4">
<div class="row">
  <section class="col">
      @include('stdlist')
  </section>
  <section class="col"></section>
</div>
  </div>
@elseif($layout=='edit')
<div class="container-fluid">
<div class="row">
  <section class="col mt-4">
      @include('stdlist')
      
  </section>
  <section class="col-md-7 mt-4">
  <form action="{{url('/update/'.$student->id)}}" method="POST">
  @csrf
  <div class="form-group">
    <label>CNE</label>
    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
  </div>

  <div class="form-group">
    <label>First Name</label>
    <input name="firstName" type="text" class="form-control" placeholder="Enter First name ">
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input name="lastName" type="text" class="form-control" placeholder="Enter Last name">
  </div>

  <div class="form-group">
    <label>Age</label>
    <input name="age" type="text" class="form-control" placeholder="Enter age">
  </div>

  <div class="form-group">
    <label>Speciality</label>
    <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
  </div>

  <div class="form-group">
    <input  type="submit" class="btn btn-success" value="Update">
    <input  type="reset" class="btn btn-info" value="Reset">
  </div>
  
</form>
  </section>
</div>
  </div>
@endif
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>