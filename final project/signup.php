<?php // server scripting language(used on the server side)
$success=0; //variable to check success or failure
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){ //uisng request method and perform post operation
include 'connect.php';
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM signup WHERE email='$email'";
$result=mysqli_query($con,$sql);
if($result){
$num=mysqli_num_rows($result);
if($num>0){
  echo "User already exist";
$user=1;
session_start(); //no need to login again
$_SESSION['email']=$email;
header('location:index.php');
}else{
$sql="INSERT INTO signup (email,password) VALUES ('$email', '$password')";
$result=mysqli_query($con,$sql);
if($result){
  echo "Registered successfully";
$success=1;
}
else{
die(mysqli_error($con));
}
}
}
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eat easily</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
if($user){
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error</strong> User already exist.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<?php
if($success){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Congrats</strong> You are successfully Signed In.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Eat Easily</a>
          <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
             
              <li class="nav-item bg-primary text-white">
                <a class="nav-link" href="signup.php">sign up </a>
              </li>
              <li class="nav-item  bg-light text-white">
                <a class="nav-link" href="login.php">Log in </a>
              </li>
            </ul>
          </div>
        </div>
           
           </nav>
          </header>
          <form method="post" action="signup.php">
        <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">signup</p>
      
                      <form class="mx-1 mx-md-4">
                      

        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" class="form-control" id="form" 
                            required autocomplete="off" name="email">
                            <label for="email">Email</label>
                        </div>
</div>
<div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" class="form-control" id="form" required name="password">
                            <label for="password">Password</label>
                        </div>
</div>

                        
<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  
                            <input type="submit" class="submit" value="signup">
</div>
</div>

<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="signup.png"
                        class="img-fluid" alt="Sample image">
</div>
</div>


                            <form>
                            <div class="signin">
                            <span>Already have an account? <a href="login.php">Log in here</a></span>
</div>
</div>

                     </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>