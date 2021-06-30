<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>



<!-- header start-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="/business/home">Home</a></li>
      <li><a href="/business/message">Message</a></li>
      <li><a href="/business/create/post">Create Post</a></li>
      <li><a href="/business/product/list">Product List</a></li>
      <li><a href="/business/blogpost">Blog</a></li>
      <li><a href="#">My Profile</a></li>

    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="submit" class="btn btn-danger" href="/logout">log out</button>
      <!-- <a href="#">Log out</a> -->

    </form>
  </div>
</nav>

<!-- header end-->




<!-- content start -->
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Send your message</h1>
    		
    		<form action="" method="post">
            @csrf
    		    
    		    <div class="form-group ">
    		        <!-- <label for="slug">Product name<span class="require" required>*</span></label> -->
    		        <input type="text" class="form-control" name="mobilenumber" placeholder="Mobile Number"/>
    		    
    		    </div>
    		    
    		    
    	    		    
    		    <div class="form-group">
    		        <button type="Send Message" class="btn btn-primary" >
    		            Send message
    		        </button>
    		        
    		        
    		    </div>
    		    
    		</form>

            {{session('mobile_message')}}

            
		</div>
		
	</div>
</div>

<!-- content_end -->



<style>

.require {
    color: #666;
}
label small {
    color: #999;
    font-weight: normal;
}

  span{
   font:bold;
}

</style>