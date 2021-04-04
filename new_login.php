
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

<style type="text/css">
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
	width:100%;
	padding : 150px;
}
.banner-sec{
	background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;
}
.container{
	background:#fff; border-radius: 10px; 
}
.carousel-inner{
	border-radius:0 10px 10px 0;
}
.carousel-caption{
	text-align:left; left:5%;
}
.login-sec{
	padding: 50px 30px; position:relative;
}
.login-sec .copy-text{
	position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;
}
.login-sec .copy-text i{
	color:#FEB58A;
}
.login-sec .copy-text a{
	color:#E36262;
}
.login-sec h2{
	margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;
}
.login-sec h2:after{
	content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto
}
.btn-login{
	background: #DE6262; color:#fff; font-weight:600;
}
.banner-text{
	width:70%; position:absolute; bottom:40px; padding-left:20px;
}
.banner-text h2{
	color:#fff; font-weight:600;
}
.banner-text h2:after{
	content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;
}
.banner-text p{
	color:#fff;
}
</style>

	<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">MediLive</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
        </ul>
      </nav>
    </div>
  </header>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		    <form action="" method="post">
  	<div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">User Name</label>
    <input type="text" class="form-control" name="User" placeholder="Type your username...">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" name="Password" placeholder="Type your password...">
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" name="submit" class="btn btn-login float-right">Submit</button>
  </div>
  
</form>
<?php
session_start();
include("connection.php");

?>

<?php
if (isset($_POST['submit']))
{
	$ur = $_POST['User'];
	$pw = $_POST['Password'];
	$query = "SELECT * FROM document WHERE User='$ur' && Password='$pw'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total !=0)
		{
			$_SESSION['User']=$ur;
			header('location:home.php');
		}
		else
		{
			echo "login failed";
		}
}
?>
<div class="copy-text">Don't have an account? <a href="http://localhost/Medilab/medilive_login_document.php">Register Here</a></div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" class="active"></li>
                  </ol>	   
		    
		</div>
	</div>
</div>
         
</section>
</body>
</html>

