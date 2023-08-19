<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login-MobilePlanet</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    <link href="css/headerAndFooter.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>

<?php include_once 'header.php'; ?>

<div class="container-fluid content-wrapper">
    <div class="container content">
        <div class="container-fluid form-wrapper">
            <div class="container signin-form">
                <h4 class="text-center"><span class="signin-btn" onClick="openSignIn();">Sign in</span><span> /
                    </span><span class="register-btn" onClick="openRegister();">Register</span></h4>
                <form method="post" action="includes/signin.inc.php">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name = "signin_un">
                        <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name = "signin_pwd">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
                </form>
            </div>
            <div class="container register-form">
                <h4 class="text-center"><span class="signin-btn" onClick="openSignIn();">Sign in</span><span> /
                    </span><span class="register-btn" onClick="openRegister();">Register</span></h4>
                <form name="register-Form" method="post" action="includes/signup.inc.php">
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email" name = 'un'>
                        <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name = "pwd">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3">Re-Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="rpwd">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

<script>
	  	function openSignIn(){
			 document.querySelector(".register-form").style.display="none";
			 document.querySelector(".signin-form").style.display="block";
			
		}
		  
		 function openRegister(){
			 document.querySelector(".register-form").style.display="block";
			 document.querySelector(".register-form").style.textTransform
			 document.querySelector(".signin-form").style.display="none";
			 document.querySelector(".register-form .signin-btn").style.textDecoration="none";
			 document.querySelector(".register-form .signin-btn").style.color="black";
			 document.querySelector(".register-form .register-btn").style.textDecoration="underline";
			 document.querySelector(".register-form .register-btn").style.color="blue";

			 
		}
	  </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
</body>

</html>