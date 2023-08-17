<?php 
    if(isset($_POST["submit"])){ //Check if submit button is clicked
    
        include_once 'dbConn.inc.php'; //include database connection php file

        // Validate and sanitize user input
        $un = mysqli_real_escape_string($conn,$_POST['un']);
        $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
        $rpwd = mysqli_real_escape_string($conn,$_POST['rpwd']);
        $hpwd = password_hash($pwd, PASSWORD_DEFAULT);

        // Initialize error array to store validation errors
        $errors = [];   

        if(empty($un)){
            $errors[] = "Username is required !";
        }

        if(empty($pwd)){
            $errors[] = "Password is required !";
        }elseif(strlen($pwd)<8){
            $errors[] = "Password must be at least 8 characters long !";
        }

        if(empty($rpwd)){
            $errors[] = "Password repeat is required !";
        }elseif($pwd !== $rpwd){
            $errors[] = "Password does not match !";
        }

        $sql = "select * from user where userName = '$un'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $errors [] = "The user name is already taken";
        }


        // If there are validation errors, display them to the user
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p>Error : $error</p>";
            }
            
        } else {
            // If there are no errors, proceed with the signup process
            $sql = "insert into user(userName,Password,adminOrCustomer) values('$un','$hpwd','0')";
            if($conn->query($sql) == TRUE){
                echo "Recode Updated Successfully";
            }else{
                echo "error Updating Record".$conn->error;
            }
            
            $sql1 = "select userId from user order by userId desc limit 1";
            $result1 = mysqli_query($conn,$sql1);
            $record1 = mysqli_fetch_assoc($result1);
            $sql2 = "insert into cartwishlist(userId)  values(".$record1['userId'].")";
            mysqli_query($conn,$sql2);
        }
    }else{
        header('Location:../signin.php');
    }
    // Close the database connection
    $conn->close();
?>
