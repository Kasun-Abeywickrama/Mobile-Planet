<html>
    <body>
        <?php
        
            include '../../includes/dbConn.inc.php';

            $itemID = $_POST["itemID"];        
            $upitemName = $_POST["itemName"];
            $upitemType = $_POST["itemType"];
            $upitemDescription = $_POST["itemDescription"];
            $upsellingPrice = $_POST["itemSellingPrice"];
            $upbuyingPrice = $_POST["itemBuyingPrice"];
            $tmpImgName1 = $_FILES["itemPhoto"]["tmp_name"];
        
            $up1 = "UPDATE item SET itemName='$upitemName', categoryId = '$upitemType', description='$upitemDescription', sellingPrice='$upsellingPrice', buyingPrice='$upbuyingPrice' WHERE itemId='$itemID'";
            if($conn->query($up1) == TRUE)
            {
                unlink("../../assets/ProductImages/$itemID.png");
				$move_file = move_uploaded_file($tmpImgName1, "../../assets/ProductImages/$itemID.png");
                echo '<script>alert("Data has been updated successfully")</script>';
                echo "<script>window.location.replace('http://kasunthiwanka.epizy.com/admin/pages/Item-Insert.php')</script>";
            }
            else
            {
                echo "Unable to update the product details".$conn->error;
                
            }
        ?>
    </body>
</html>