<html>
    <body>
        <?php

            /* Getting the item Name of the deleting item to a variable */
            $deleteName = $_POST["delName"];

            /* Including the database connection */
            include '../../includes/dbConn.inc.php';

            /* First we need to check if that item Name exists */
            $del1 = "SELECT itemId FROM item WHERE itemName='$deleteName'";
            $exe1 = $conn->query($del1);

            /* If there is an item Name like that, there must be only a single row in the $exe1 variable */
            if($exe1->num_rows == 1)
            {    
                /* First delete the image file */
                $row = mysqli_fetch_array($exe1);
                unlink("../../assets/ProductImages/$row[0].png") ;
                /* Then delete the dtabase record */
                $del2 = "DELETE FROM item WHERE itemName='$deleteName'";
                $exe2 = $conn->query($del2);
                echo '<script>alert("Product Successfully Deleted")</script>';
                echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com/admin/pages/Item-Insert.php')</script>";
            }
            else
            {
                echo '<script>alert("Product does not Exists")</script>';
                echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com/admin/pages/Item-Insert.php')</script>";
            }
        ?>
    </body>
</html>