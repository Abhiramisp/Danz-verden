<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
h3
{
	color:blue;
}
#p1
{
	color:yellow;
}
#name,#num, #mail, #pass1 ,#academy
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
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form action="regactn.php" class="splash-container" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p id="p1">Please enter your user information.</p>
            </div>
            <div class="card-body">
            <div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="name" name="name" required placeholder="Name" autocomplete="off">
                </div>
              
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" id="num" name="phone_number" required placeholder="Phone Number" autocomplete="off">
                </div>
                 <div class="form-group">
                    <input class="form-control form-control-lg" type="email" id="mail" name="email" required placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1"  type="password" name="pass1" required placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="academy"  type="text" name="typ" required placeholder="Academy/Privet">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Sign in</button>
                </div>
                 
            <div class="card-footer bg-white">
                <p>Already member? <a href="login.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>