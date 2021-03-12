<!DOCTYPE html>
<html>
<head>
	<title>User-Home</title>
	<style type="text/css">
		  .card:before{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	height: 100%;
	background: linear-gradient(to bottom, rgba(0,176,155,0.5), rgba(150,201,61,1));
	z-index: 2;
	transition: 0.5s all;
   opacity: 0;
	 
}

.card:hover:before{
	opacity: 1;
}

.card img{
	width: 100%;
	height: 300px;
	object-fit: cover;
	top: 0;
	left: 0;
}

.card .card-body{
	position: relative;
	z-index: 3;
	color: #fff;
	opacity: 0;
	 transform: translateY(30px);
	 transition: 0.5s all;


}

.card:hover .card-body{

	opacity: 1;
	transform: translateY(0px);

}


.card .card-body h1{
	margin: 0;
}

.card .card-body p{
	letter-spacing: 1px;
	font-size: 8px;
	margin-top: 8px;
	margin-bottom: 20px;
    font-size: 18px;
}







	</style>

   <!-- bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>
<body>
   <div class="container">
   	<div class="row row-cols-1 row-cols-md-4 g-4">
    @foreach($show as $a)  		
  <div class="col">
    <div class="card shadow-lg">
      <img src="{{asset('uploads/products')}}/{{$a->product_image}}" class="card-img-top" alt="Image not found" title="{{$a->product_name}}" height="300">
      <div class="card-body">
        <h5 class="card-title">{{$a->product_name}}</h5>
         <h3>Product Price</h3>
         <p>RS:10000</p> 
        
      </div>
    </div>
  </div>
    @endforeach


   </div>



</body>
</html>