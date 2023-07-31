<html>
    <head>
        <title>Insert Item</title>
    </head>
    <body>
        <?php
		
			$itemName = $_POST["itemName"];
			$itemType = $_POST["itemType"];
			$itemDescription = $_POST["itemDescription"];
			$sellingPrice = $_POST["itemSellingPrice"];
			$buyingPrice = $_POST["itemBuyingPrice"];
			$tmpImgName = $_FILES["itemPhoto"]["tmp_name"];

			include '../../includes/dbConn.inc.php';

			$sel = "select itemId from item order by itemId desc limit 1";

			$lastId = $conn->query($sel);
			
			$row = mysqli_fetch_array($lastId);


			$ins = "insert into item (itemId, itemName, type, description, sellingPrice, buyingPrice, categoryId, brandId) values($row[0]+1, '$itemName', '$itemType', '$itemDescription', '$sellingPrice', '$buyingPrice', '$itemType', '$itemType')";

			if($conn->query($ins) == TRUE)
			{
				$id = $row[0]+1;
				$move_file = move_uploaded_file($tmpImgName, "../../images/$id.png");
				echo '<script>alert("Record inserted successfully")</script>';
				echo "<script>window.location.replace('http://localhost/admin/pages/item-Insert.php')</script>";
			}
			else
			{
				echo '<script>alert("Record unable to insert")</script>';
				echo "<script>window.location.replace('http://localhost/admin/pages/item-Insert.php')</script>";
			}
	?>
    </body>
