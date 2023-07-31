<html>
    <body>
        <?php
        
            $serverName = "localhost";
            $userName = "root";
            $password = "";
            $database = "e-commerce-db";

            $conn = new mysqli($serverName, $userName, $password, $database);
            if($conn->connect_error)
            {
                die("Database connection failed".$conn->connect_error);
            }

            $itemID = $_POST["itemID"];        
            $upitemName = $_POST["itemName"];
            $upitemType = $_POST["itemType"];
            $upitemDescription = $_POST["itemDescription"];
            $upsellingPrice = $_POST["itemSellingPrice"];
            $upbuyingPrice = $_POST["itemBuyingPrice"];
        
            $up1 = "UPDATE item SET itemName='$upitemName', type='$upitemType', description='$upitemDescription', sellingPrice='$upsellingPrice', buyingPrice='$upbuyingPrice' WHERE itemId='$itemID'";
            if($conn->query($up1) == TRUE)
            {
                echo '<script>alert("Data has been updated successfully")</script>';
                echo "<script>window.location.replace('http://localhost/admin/pages/item-Insert.php')</script>";
            }
            else
            {
                echo "Unable to update the product details".$conn->error;
                
            }
        ?>
    </body>
</html>