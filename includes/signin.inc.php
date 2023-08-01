<?php session_start();?>
<?php 
    if(isset($_POST["submit"])){
        $errors = [];

        //Check errors of user input
        if(!isset($_POST["signin_un"]) || strlen(trim($_POST["signin_un"])) < 1){
            $errors[] = "Username is missing / Invalid";
        }
        if(!isset($_POST["signin_pwd"]) || strlen(trim($_POST["signin_pwd"])) < 1){
            $errors[] = "Password is missing / Invalid";
        }

        if(empty($errors)){
            include_once 'dbConn.inc.php';
            $username = mysqli_real_escape_string($conn,$_POST['signin_un']);
            $password = mysqli_real_escape_string($conn,$_POST['signin_pwd']);
            $query = "select * from user where userName = '$username' limit 1";

            $result = $conn->query($query);
            if($result && $result->num_rows == 1){
                $user = $result->fetch_assoc();
                // Verify the password using password_verify function
                if (password_verify($password,$user["password"])) {
                    // Password is correct, user is authenticated
                    echo "<script> alert('Authentication Sucessfully completed !'); </script>";
                    $_SESSION['log_name'] = $user['userName'];
                    $_SESSION['log_id'] = $user['userId'];
                    header('Location:../index.php');
                }else{
                    $errors [] = "Invalid Username or Password !";
                }
            }else{
                $errors [] = "The User has not registered.";
            }
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p>Error: $error</p>";
            }
        }
        
    }else{
        header('Location:../index.php');
    }
?>