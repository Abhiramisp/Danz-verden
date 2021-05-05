<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" ="width concept=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DANZ VERDEN</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
		 
  background: url(../3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
div {
  opacity: 0.9;
}
div.splash-container
{

    position: relative;
	 margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);

}
#username, #password
  {
  border-radius: 15px;
  border-color: red;
  padding: 20px; 
  width: 300px;
  height: 15px; 
}
button
{
  border-radius: 15px;
  border-color: red;
  padding: 20px; 
  width: 30px;
 }
.splash-container, .card, .card-header text-center
{
	background-color:rose;

}
 
    </style>
</head>

<body >

    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- background="../3.jpg"
============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">
            <img class="logo-img" src="../13.png" alt="logo" width="200" height=90">
            </div>
           <div class="card-body">
                <form action="ulogin.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="uname" type="text" placeholder="Phone number/Email-ID" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="pswd" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Log in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="user_registration.php" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot-password.php" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>