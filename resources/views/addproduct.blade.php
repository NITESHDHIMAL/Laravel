<!DOCTYPE html>
<html>
<head>
	<title>add product</title>
 
  <!-- Bootstrap css link -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   <div class="container">

   	<h1 class="mb-3">Add Product Form</h1>
    <form method="post" enctype="multipart/forn-data" action="">
   	 <div class="col-md-6">
   	 	    <label for="productName">Productname</label>
            <input type="text" name="pname" class="form-control" placeholder="enter productname" id="inputProductName">
   	 </div>

<div class="col-md-6">
   	 	    <label for="price">Product Price</label>
            <input type="text" name="price" class="form-control" placeholder="enter productprice" id="inputProductPrice">
   	 </div>
 
   <div class="col-md-6">
   	 	    <label for="quantity">Product Quantity</label>
            <input type="number" name="quantity" class="form-control" placeholder="enter quantity" id="inputqunatity">
   	 </div>

   	 <div class="col-md-6">
   	 	    <label for="description">Description</label>
   	        <textarea name="description" class="form-control"></textarea>
   	 </div>

        <div class="col-md-6">
        	 <label for="image">Product Image</label>
             <input type="file" name="image" class="form-control">
        </div>

       <div class="col-md-6">
          <button type="submit" class="btn btn-primary">Add Product</button>
        </div>



   </form>


   </div>   


</body>
</html>