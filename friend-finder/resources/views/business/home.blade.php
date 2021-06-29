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
    <!-- <div class="navbar-header">
      <!-- <a class="navbar-brand" href="#">BusinessPage</a> -->
    <!-- </div> --> -->
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Message</a></li>
      <li><a href="#">Create Post</a></li>
      <li><a href="#">Create group</a></li>
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



<!-- product card start-->

<div class="card">
    <div class="img1">
  <img src="/images/1.jpg" alt="Denim Jeans" style="width:50%">
  </div>
  <h1>Samsung Mobile</h1>
  <p class="price">$1000.99</p>
  <p>Some text about the samsung phone..</p>
  <p><button>Add to Cart</button></p>
</div>


<!-- product card end-->






    
</body>

<style>

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 25%;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>
</html>