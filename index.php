<?php

require('connection.php');

$name_error = $person_error = $number_error = $email_error = "";

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <style>	   
        .carousel-inner img {
    width: 100%;
    height: 50%;
  }
	    .error{
		   color: red;
	   }
	   .c1{
		   border: 2px red ridge;
	   }
  </style>
</head>

<body>

<div class="container-fluid bg-dark ">
<div class="container bg-dark ">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo" style="width:100px;"></a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white mr-3" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white mr-3" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white mr-3" href="#">Features</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link text-white mr-3" href="#">Dealers</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link text-white mr-3" href="#">Request A Demo</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link text-white mr-3" href="#">Contact Us</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link text-white mr-3" href="#">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg-white text-black-50 rounded-pill text-center" href="#">Customers Login</a>
      </li>     
    </ul>
  </div>  
</nav>
</div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider.jpg" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/slider.jpg" alt="Chicago" width="1100" height="3300">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/slider.jpg" alt="New York" width="1100" height="300">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container">
<div class="row">
<div class="col">
<img src="https://www.freeiconspng.com/uploads/apple-iphone-8-iphone-x-png-27.png" width="350" alt="Apple"/>
</div>
<div class="col pt-5">
	<h2 class="mt-5 pt-3"><b>Who We Are</b></h2>
	<p><b>An Agency established in 2006 by a group of advertising and marketing professionals with one goal in our mind:</b></p>
	<p>To elevate the BTl scene in GCC and evolve our company based on our clients needs:</p>
	<p><i class="fas fa-caret-right text-primary"></i> KSA</p>
	<p><i class="fas fa-caret-right text-primary"></i> UAE</p>
	<p><i class="fas fa-caret-right text-primary"></i> GCC & Middle East*</p>
	<br>
	<p><small>*Gulf Meteor Works through partners officer OMAN, BAHRAIN and KAWIAT to provide full GCC and Middle East coverage to its clients.</small></p>
</div>
</div>
</div>

<div class="container-fluid bg-light">
	
<div class=" mt-5 pt-5 float-right">
<img src="https://www.freeiconspng.com/uploads/apple-iphone-8-iphone-x-png-27.png" width="300px" alt="Apple"/>
</div>
<div>
	<h2 class="ml-5"><b>App Features</b></h2>
	<p class="mx-5">Mobile apps are continously to have a profound impact on aspect of vehicle purchase and ownership experience.</p>
	<div class="row ml-4">
		<div class="col-3 text-center text-white rounded bg-primary mx-4 my-4 py-3">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Book a test drive
		</div>
		<div class="col-3 text-center text-white rounded bg-primary mx-4 my-4 py-3">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Book a service
		</div>
		<div class="col-3 text-center rounded mx-4 my-4 py-3 border border-dark">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Door to door service
		</div>
		
		<div class="col-3 text-center rounded mx-4 my-4 py-3 border border-dark">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Make a payment
		</div>
		<div class="col-3 text-center rounded mx-4 my-4 py-3 border border-dark">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			New vehicles
		</div>
		<div class="col-3 text-center rounded mx-4 my-4 py-3 border border-dark">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Certified pre-owned
		</div>
		
		<div class="col-3 text-center rounded mx-4 my-4 py-3 border border-dark">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Leasing
		</div>
		<div class="col-3 text-center rounded mx-4 my-4 py-3 border border-dark">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Special offers
		</div>
		<div class="col-3 text-center rounded mx-4 my-4 py-3 border border-dark">
			<i class="fas fa-house-user d-block" style="font-size: 3em"></i> <br>
			Roadside assistance
		</div>
		
	</div>
</div>

</div>
<br>
<div class="container row m-auto" style="width: 80%;">

<div class="col-8 pt-4">
	<h2><b>Dealers Admin Panel</b></h2>
	<h6><b>Control and Measure your data</b></h6> <br>
	<p>Due to thier superior speed, ease to use and greater depth of features, apps are more effective than getting people closer to the dealership. They have become an essential communication tools for dealers looking to excel in to days automotive market.</p>
	<a href="#" class="rounded-pill text-center px-4 py-2 btn btn-outline-primary">Learn More</a>
</div>
<div class="col mt-4">
<img src="https://cdn.pixabay.com/photo/2020/06/26/12/21/macbook-pro-5342546_1280.png" width="100%" alt="Apple"/>  
</div>
</div>
<br>
<div class="container-fluid bg-light p-5">
	<h2 class="text-center">Request A Demo</h2>
	<p class="text-center">Your Dealership in the palm of your hands</p>
	<div class="container m-auto bg-white p-3" style="width: 80%;">
	 <form id="form1" method="post">
    <div class="form-group">
     <div id="success" class="text-center"></div>
      <label for="name">Company Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Your Company Name" name="name" autocomplete="off">
      
    </div>
    <div class="form-group">
      <label for="person">Contact Person:</label>
      <input type="text" class="form-control" id="person" placeholder="Enter Your Contact Person" name="person" autocomplete="off">
    
    </div>
    <div class="form-group">
      <label for="number">Phone Number:</label>
      <input type="text" class="form-control" id="number" placeholder="Enter Your Mobile Number" name="number" autocomplete="off">
     
    </div>
    <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address" name="email" autocomplete="off">
      
    </div>
    
    <button type="submit" name="submit" id="submit" class="btn btn-primary rounded-pill" onClick="addRecord()">Submit Request</button>
    </form>
	</div>
</div>
<br>


<script src="jquery validation/dist/jquery.validate.min.js"></script>

	<script>
	
	$(document).ready(function(){
		
		$('#form1').validate({
			rules:{
				/*
				name:{
					required:true,
					minlength:3,
					maxlength:12
				},
				
				person:{
					required:true,
					minlength:3,
					maxlength:12
				},
				*/
				number:{
					required:true,
					minlength:3,
					maxlength:12
				},
				
				email:{
					required:true,
					email:true
				}
			},
			
			highlight:function(element){
				$(element).addClass("c1");
			},
			
			unhighlight:function(element){
				$(element).removeClass("c2");
			},
			
			
			messages:{
				name:{
					required:"Company Name is mandatory",
				}
			},
			
			submitHandler: function addRecord(){
				var c_name = $('#name').val();
		var c_person = $('#person').val();
		var number = $('#number').val();
		var email = $('#email').val();
		
		$.ajax({
			url:"insert.php",
			type:"post",
			data:{
				c_name:c_name,
				c_person:c_person,
				number:number,
				email:email
			},
			success: function(data,status){
				$('#success').html(data);
			}
		})
			}
		
		})
		});
	
	</script>

<div class="m-auto text-center" style="width: 65%;">
	<h2>Testimonials</h2> <br>
	<p>See what our valueable clients say about us</p> <br>
	<img src="img/buyer.jpg" class="" width="100px" style="border-radius: 50%;"> <br> <br>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus nemo cum assumenda suscipit sit vero numquam quas officiis, impedit nihil, nisi debitis laudantium eveniet harum, in est expedita maxime tenetur.</p>
	<p><b>Ahmad Habashy</b></p>
	<p><b>Dubai, UAE</b></p>
</div>
<br>
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.4546546255747!2d73.89849531453957!3d33.51556295326888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e0217275f12e49%3A0x168645b1ade52539!2sDream%20Land%20Restaurant!5e0!3m2!1sen!2s!4v1610130525100!5m2!1sen!2s" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> <br><br><br>
	<img src="img/twitter-logo-2-1.png" width="70px" class="m-auto d-block "> <br>
	<div class="text-center">
	<span class="mr-3">(c) Copyrights 2020, All Rights reserved</span>
	<span class="mr-3">Terms & Conditions</span>
	<span>Privacy Policy</span></div>
</div>

<br><br>
</body>
</html>

