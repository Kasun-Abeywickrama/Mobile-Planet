<html>
    <body>
        <?php

            $deleteID = $_POST["delID"];

            include '../../includes/dbConn.inc.php';

            $del1 = "SELECT * FROM item WHERE itemId='$deleteID'";
            $exe1 = $conn->query($del1);

            if($exe1->num_rows == 1)
            {    
                unlink("../../assets/ProductImages/$deleteID.png") ;
                $del2 = "DELETE FROM item WHERE itemId='$deleteID'";
                $exe2 = $conn->query($del2);
                echo '<script>alert("Product Successfully Deleted")</script>';
                echo "<script>window.location.replace('http://kasunthiwanka.epizy.com/admin/pages/Item-Insert.php')</script>";
            }
            else
            {
                echo '<script>alert("Product does not Exists")</script>';
                echo "<script>window.location.replace('http://kasunthiwanka.epizy.com/admin/pages/Item-Insert.php')</script>";
            }
        ?>
    </body>
</html>