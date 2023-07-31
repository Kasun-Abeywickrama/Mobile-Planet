<html>
    <body>
        <?php

            $deleteID = $_POST["delID"];

            include '../../includes/dbConn.inc.php';

            $del1 = "SELECT * FROM item WHERE itemId='$deleteID'";
            $exe1 = $conn->query($del1);

            if($exe1->num_rows == 1)
            {    
                unlink("../../images/$deleteID.png") ;
                $del2 = "DELETE FROM item WHERE itemId='$deleteID'";
                $exe2 = $conn->query($del2);
                echo '<script>alert("Product Successfully Deleted")</script>';
                echo "<script>window.location.replace('http://localhost/admin/pages/item-Insert.php')</script>";
            }
            else
            {
                echo '<script>alert("Product does not Exists")</script>';
                echo "<script>window.location.replace('http://localhost/admin/pages/item-Insert.php')</script>";
            }
        ?>
    </body>
</html>