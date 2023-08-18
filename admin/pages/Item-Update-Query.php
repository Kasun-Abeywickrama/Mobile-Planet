<html>
    <body>
        <?php
        
            /* Including the database connection */
            include '../../includes/dbConn.inc.php';

            /* Getting all the details of the update form to variables */
            $itemID = $_POST["itemID"];        
            $upitemName = $_POST["itemName"];
            $upitemDescription = $_POST["itemDescription"];
            $upsellingPrice = $_POST["itemSellingPrice"];
            $upbuyingPrice = $_POST["itemBuyingPrice"];
            $tmpImgName1 = $_FILES["itemPhoto"]["tmp_name"];
        
            /* Creating and executing the query to update the details of the relavant item ID */
            $up1 = "UPDATE item SET itemName='$upitemName', description='$upitemDescription', sellingPrice='$upsellingPrice', buyingPrice='$upbuyingPrice' WHERE itemId='$itemID'";
            if($conn->query($up1) == TRUE)
            {
                /* Delete the current image with item ID we have in the folder */
                unlink("../../assets/ProductImages/$itemID.png");
                /* Move the new image file to the folder */
				$move_file = move_uploaded_file($tmpImgName1, "../../assets/ProductImages/$itemID.png");
                echo '<script>alert("Data has been updated successfully")</script>';
                echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com/admin/pages/Item-Insert.php')</script>";
            }
            else
            {
                echo "Unable to update the product details".$conn->error;
            }
        ?>
    </body>
</html>