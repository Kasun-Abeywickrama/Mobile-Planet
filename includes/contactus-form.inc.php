<?php
session_start();
if(isset($_POST["submit"])) //Check if submit button is clicked
{


include_once 'dbConn.inc.php'; //Include database connection php file

//validate and sanitize user input
$yn = mysqli_real_escape_String($conn,$_POST['yn']);
$em = mysqli_real_escape_String($conn,$_POST['em']);
$in = mysqli_real_escape_String($conn,$_POST['in']);

//Initialize error array to store validation errors
$errors=[];

if(empty($yn)){
    $errors = "Name is missing";
}
elseif(strlen($yn)>70){
    $errors = "Name should be less than 70 characters";
}

if(empty($em)){
    $errors = "Email is missing";
}

if(empty($in)){
        $errors = "Inquiry is empty";    

}

 // If there are validation errors, display them to the user
 if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>Error : $error</p>";
    }   
} 
else {
    // If there are no errors, proceed with the submit process
    $sql = "insert into inquiry(name,email,inquiry,readed,userId) values('$yn','$em','$in',0,'".$_SESSION['log_id']."')";

    if($conn->query($sql) == TRUE){
         echo '<script>alert("Inquiry Updated Successfully");</script>';
         echo "<script>window.location.replace('../index.php')</script>";
    }else{
        echo '<script>alert("Inquiry Updated Error '.$conn->error.'");</script>';
        echo "<script>window.location.replace('../index.php')</script>";
    }

}
}



?>