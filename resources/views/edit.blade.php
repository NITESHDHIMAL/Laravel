<!DOCTYPE html>
<html>
<head>
	<title>updade product</title>
 
  <!-- Bootstrap css link -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 


</head>
<body>
   <div class="container">

   	<h1 class="mb-3">Update Product Form</h1>
    @if(Session::has('msg'))
    <div class="alert alert-success">
    {{Session::get('msg')}}	 
    </div>
    @endif




    <form method="post" enctype="multipart/form-data" action="">
      @csrf

   	 <div class="col-md-6">
   	 	    <label for="productName">Productname</label>
            <input type="text" name="pname" class="form-control" placeholder="enter productname" id="inputProductName" value="{{$product->product_name}}">
   	 </div>

<div class="col-md-6">
   	 	    <label for="price">Product Price</label>
            <input type="text" name="price" class="form-control" placeholder="enter productprice" id="inputProductPrice" value="{{$product->product_price}}">
   	 </div>
 
   <div class="col-md-6">
   	 	    <label for="quantity">Product Quantity</label>
            <input type="number" name="quantity" class="form-control" placeholder="enter quantity" id="inputqunatity" value="{{$product->product_quantity}}">
   	 </div>

   	 <div class="col-md-6">
   	 	    <label for="description">Description</label>
   	        <textarea name="description" class="form-control">{{$product->product_description}}</textarea>
   	 </div>

        <div class="col-md-6">
        	 <label for="image">Product Image</label>
             <input type="file" name="image" class="form-control">
             <img src="{{asset('uploads/products')}}/{{$product->product_image}}" width="40">
        </div>

       <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Update Product</button>
        </div>



   </form>


   </div>   


</body>
</html>