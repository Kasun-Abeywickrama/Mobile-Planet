<html>
    <body>

        <?php 
        session_start();
            /*Including the database connection */
            include 'includes/dbConn.inc.php';

            /* Getting inserted data to variables */
            $userId = $_SESSION["log_id"];

            $newemail = $_POST["newem"];
            $newfirstName = $_POST["newfnm"];
            $newlastName = $_POST["newlnm"];
            $newpassword = $_POST["newpw"];
            $newhashpassword = password_hash($newpassword, PASSWORD_DEFAULT);
            $newgender = $_POST["newgen"];
            $newphone = $_POST["newpho"];
            $newaddress = $_POST["newadd"];

            /*Updating the data in the database*/
            $up = "UPDATE user SET userName='$newemail', password='$newhashpassword', gender='$newgender', telephone='$newphone', address='$newaddress', firstName='$newfirstName', lastName='$newlastName' WHERE userId = '$userId'";
            if($conn->query($up) == TRUE)
            {
                echo '<script>alert("Data updated successfully")</script>';
                echo "<script>window.location.replace('index.php')</script>"; 
            }
            else
            {
                echo '<script>alert("Unable to update the data")</script>'.$conn->error;
                echo "<script>window.location.replace('index.php')</script>";
            }
    ?>
    </body>
</html>