<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login-MobilePlanet</title>
    <link rel="icon" href="assets/favicon-32x32.png" type="image/png">

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
                <form method="post" action="includes/signin.inc.php" onSubmit="return valSignin();">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="em" placeholder="Enter email" name = "signin_un">
                        <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="ps" placeholder="Password" name = "signin_pwd">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
                </form>
            </div>
            <div class="container register-form">
                <h4 class="text-center"><span class="signin-btn" onClick="openSignIn();">Sign in</span><span> /
                    </span><span class="register-btn" onClick="openRegister();">Register</span></h4>
                <form name="register-Form" method="post" action="includes/signup.inc.php" onSubmit="return valSignup();">
                    <div class="form-group">
                        <label for="sem">Email address</label>
                        <input type="email" class="form-control" id="sem" placeholder="Enter email" name = 'un'>
                        <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="sfn">Fitst Name</label>
                        <input type="text" class="form-control" id="sfn" placeholder="First name" name = 'fn'>
                    </div>

                    <div class="form-group">
                        <label for="sln">Last Name</label>
                        <input type="text" class="form-control" id="sln" placeholder="Last name" name = 'ln'>
                    </div>
                    <div class="form-group">
                        <label for="sps">Password</label>
                        <input type="password" class="form-control" id="sps" placeholder="Password" name = "pwd">
                    </div>
                    <div class="form-group">
                        <label for="srps">Re-Password</label>
                        <input type="password" class="form-control" id="srps" placeholder="Password" name="rpwd">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>

<script>
    function valSignin(){
        if(document.getElementById("em").value=="" || document.getElementById("ps").value==""){
            alert("Username and Password fileds are required!");
            return false;
        }else{
            return true;
        }
    }

    function valSignup(){
        if(document.getElementById("sem").value=="" || document.getElementById("sfn").value=="" || document.getElementById("sln").value=="" || document.getElementById("sps").value=="" || document.getElementById("srps").value==""){
            alert("All fileds are required!");
            return false;
        }else if(document.getElementById("sps").value.length < 8){
            alert("Password should contain 8 characters!");
            return false;
        }else if(document.getElementById("sps").value != document.getElementById("srps").value){
            alert("Passowrd does not match");
            return false;
        }else{
            return true;
        }
    }
</script>

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