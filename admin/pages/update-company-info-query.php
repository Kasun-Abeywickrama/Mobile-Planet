<?php
    /*Get the updated company info to the variables*/
    $upComAdd = $_POST["comAdd"];
    $upComTel = $_POST["comPhone"];
    $upComOpen = $_POST["comOpen"];

    /*Include the database connection*/
    include '../../includes/dbConn.inc.php';

    /*Creating and executing the update query*/
    $updet = "UPDATE company SET companyAddress='$upComAdd', companyTelephone='$upComTel', companyOpeningTimes='$upComOpen' WHERE companyId='1'";
    if($conn->query($updet) == TRUE)
    {
        echo '<script>alert("Company Information Updated Successfully")</script>';
        echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com/admin/pages/dashboard.php')</script>";
    }
    else
    {
        echo "Information cannot be updated".$conn->error;
    }
?>