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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Message</a></li>
      <li><a href="/business/create/post">Create Post</a></li>
      <li><a href="/business/product/list">Product List</a></li>
      <li><a href="#">Blog</a></li>
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


<form action="" method="post">
    <table border="2">
    
   

    <tr>
    <td>Id</td>
    <td>Product Name</td>
    <td>Price</td>
    <td>Description</td>
    </tr>

  @foreach($add_products as $add_product) 
  

    <tr>
    <td>{{$add_product['id']}}</td>
    <td>{{$add_product['product_name']}}</td>
    <td>{{$add_product['price']}}</td>
    <td>{{$add_product['description']}}</td>
    <tr>

    @endforeach

    </table>
    </form>


    </html>