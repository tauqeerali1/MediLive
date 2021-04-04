<html>
	<head>
		<title>Register Your Account</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<header>
	</header>
<body>

	<style type="text/css">
.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>

	<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>Register your account easy with less information by filling the form below</p>
                <a href="http://localhost/Medilab/new_login.php"><input type="submit" name="" value="Login"/></a><br/>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register Your Account</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fever" placeholder="Fever *" value="" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="hospital" placeholder="Hospital *" value="" required/>
                                </div>

                            </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                            <input type="text" class="form-control" name="User" placeholder="User Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                    	<input type="Password" class="form-control" name="Password" placeholder="Password *" value="" required/>
                               		</div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" name="uploadfile" value="" required/>
                                    </div>                                        
                                        
                                        <input type="submit"  name="submit" class="btnRegister"  value="submit"/>
                                    </div>
                                </div>
                            </form>
                            <?php
                            include("connection.php");
                            error_reporting(0);
                            ?>
                            <?php
                            if($_POST['submit']){

                            $fv = $_POST['fever'];
                            $hp = $_POST['hospital'];
                            $filename = $_FILES["uploadfile"]["name"];
                            $tempname = $_FILES["uploadfile"]["tmp_name"];
                            $folder = "documents/".$filename;
                            move_uploaded_file($tempname, $folder);
                            $ur = $_POST['User'];
                            $pw = $_POST['Password'];

                            if($fv!="" && $hp!="" && $filename!="" &&  $ur!="" && $pw!="")
                            $query ="INSERT INTO document VALUES ('$fv', '$hp', '$folder', '$ur', '$pw', NULL)";
                            $data = mysqli_query($conn, $query);
                            if ($data) {
                                echo "Data inserted into database";
                            }
                            else
                            {
                                echo "All fields are required";
                            }
                            }
                            ?>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Login Your Account</h3>
                                <form action="new_login.php" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                            <input type="text" class="form-control" name="User" placeholder="Username *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="Password" class="form-control" name="Password" placeholder="Password *" value="" required/>
                                        </div>
                                        <input type="submit" name="submit" class="btnRegister"  value="Login"/>
                             		</div>
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
                    
                    </div>
                </div>
            </div>
        </div>
	</div>                         
</body>
</html>
