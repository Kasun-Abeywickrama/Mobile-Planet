<html>
    <head>
        <title>Insert Item</title>
    </head>
    <body>
        <?php
		
            /* All the details of the new item will be taken into variables */
			$itemName = $_POST["itemName"];
			$itemType = $_POST["itemType"];
			$itemDescription = $_POST["itemDescription"];
			$sellingPrice = $_POST["itemSellingPrice"];
			$buyingPrice = $_POST["itemBuyingPrice"];
			$tmpImgName = $_FILES["itemPhoto"]["tmp_name"];
            $itemBrand = $_POST["itemBrand"];

            /* Database connection codes are stored in a separate file, it will be executed here */
			include '../../includes/dbConn.inc.php';

            /* Checking whether the item name is available */
            $ch1 = "SELECT * FROM item WHERE itemName='$itemName'";
            $ch2 = $conn->query($ch1);
            if(mysqli_num_rows($ch2) == 1)
            {
                echo '<script>alert("Item Already Exists, Cannot have duplicate item names")</script>';
                echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com/admin/pages/Item-Insert.php')</script>";
                die();
            }

            /* Creating and executing a query to get the last inserted item's itemID from the database */
			$sel = "select itemId from item order by itemId desc limit 1";
			$lastId = $conn->query($sel);
			
			$row = mysqli_fetch_array($lastId);

            /* New item's ID will be ($row[0] + 1). Creating and executing the query to insert all the item details to the item table */
			$ins = "insert into item (itemId, itemName, description, sellingPrice, buyingPrice, categoryId, brandId) values($row[0]+1, '$itemName', '$itemDescription', '$sellingPrice', '$buyingPrice', '$itemType', '$itemBrand')";
			if($conn->query($ins) == TRUE)
			{
                /* After that, the image must be stored */
                /* Moving the image file to the location with it's name as the new item ID */
				$id = $row[0]+1;
				$move_file = move_uploaded_file($tmpImgName, "../../assets/ProductImages/$id.png");
				echo '<script>alert("Record inserted successfully")</script>';
				echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com/admin/pages/Item-Insert.php')</script>";
			}
			else
			{
				echo $conn->error;
				
			}
	?>
    </body>
