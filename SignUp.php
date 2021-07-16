<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Kitaabh</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="products.php">Products/Services</a>
        </li>

<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="news.php">News</a>
        </li>

<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contacts.php">Users</a>
        </li>

<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="SignUp.php">SignUp</a>
        </li>
      
<li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Login.php">Login</a>
        </li>



        
      </ul>
     
    </div>
  </div>
</nav>
<div class="jumbotron">
  <h1>SignUp</h1>
 </div>

 <div class="container">
  <div class="row">
    <div class="col-lg-6">

      <form action="registration.php" method="post">
        <div class="form-group">
          <label> Username </label>
          <input type = "text" name ="user" autocomplete="off" class = "form-control">
        </div>
        <div class="form-group">
          <label> Password </label>
          <input type = "Password" name ="password" autocomplete="off" class = "form-control">
        </div>
        <button class="btn btn-success">SignUp</button>
        <p class = "text-center">Have an account ? <a href="Login.php">Login here</a></p>
         </form> 
       </div>

 