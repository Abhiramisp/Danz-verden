<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dance Hub</title>
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
#email
  {
  border-radius: 15px;
  border-color: red;
  padding: 20px; 
  width: 300px;
  height: 15px; 
}
#span1
{
	color:Green;
}
button
{
  border-radius: 15px;
  border-color: red;
  padding: 20px; 
  width: 30px;
 }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img" src="../13.png" alt="logo" width="200" height=90"><span class="splash-description" id="span1">Please enter your user information.</span></div>
            <div class="card-body">
                <form>
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" id="email" name="email" required placeholder="Your Email" autocomplete="off">
                    </div>
                    <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="login.php">Reset Password</a></div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="registration.php">Sign Up</a></span>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../../../../Users/DELL/Downloads/concept-master/concept-master/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../../../Users/DELL/Downloads/concept-master/concept-master/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

 
</html>