<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="../css/Item-Insert.css" rel="stylesheet" type="text/css">
	<link href="../css/headerAndSidebar.css" rel="stylesheet" type="text/css">
	<script src="../js/Item-Insert-JS/Item-Update-Validate.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>

	<! Including the haeder file for the document >
	<?php
		include_once 'header.php'
	?>

    <! Getting the item number from the Item-Insert Page and assigning exsiting item data to variables >
    <?php
        /* Getting the update item Name to a variable */
		$updateName = $_POST["upName"];

        /* Including the DB conncetion file */
        include '../../includes/dbConn.inc.php';
		
        /* Getting all the data for the above item Name from the database */
        $se1 = "SELECT itemId, description, sellingPrice, buyingPrice FROM item WHERE itemName = '$updateName'";
        $ex1 = $conn->query($se1);

		if($ex1->num_rows == 1)
		{
			$row = mysqli_fetch_array($ex1);
		}
		else
		{
			echo '<script>alert("Invalid Product Name")</script>';
			echo "<script>window.location.replace('http://mobileplanet.lovestoblog.com/admin/pages/Item-Insert.php')</script>";
			die();
		} 
    ?>

  	<div class="container-fluid">
  	  <div class="container">
  	    <center>
          <br><br><br>
          <div class="jumbotron">
  	      	<label class="l1" style="text-align:center;">UPDATE PRODUCT<br></label>

            <!-- Creating and pre filling all the data of the update form using the stored database values -->

		  	<form name="itemUpdate" method="post" action="Item-Update-Query.php" onsubmit="return validateItemUpdate()" enctype="multipart/form-data">

			  	<div align="left" class="form-group">
			    	<label for="ItemID">PRODUCT ID&nbsp;</label>
			    	<input type="text" class="form-control" name="itemID" value="<?php echo "$row[0]"?>" readonly>
				</div>

			  	<div align="left" class="form-group">
			    	<label for="inputItemName">PRODUCT NAME&nbsp;</label>
			    	<input type="text" class="form-control" name="itemName" value="<?php echo "$updateName"?>">
				</div>
			  
		    	<div align="left" class="form-group">
			    	<label for="inputItemDesc">DESCRIPTION&nbsp;</label><br>
			    	<textarea class="form-control" name="itemDescription" cols="65" rows="8" ><?php echo "$row[1]"?></textarea>    
	        	</div>
			  
			  	<div align="left" class="form-group">
			    	<label for="inputSellingPrice">SELLING PRICE (Rs)&nbsp;</label>
			    	<input type="text" class="form-control" name="itemSellingPrice" value="<?php echo "$row[2]"?>">
		    	</div>
			  
			  	<div align="left" class="form-group">
			    	<label for="inputBuyingPrice">BUYING PRICE (Rs)&nbsp;</label>
			    	<input type="text" class="form-control" name="itemBuyingPrice" value="<?php echo "$row[3]"?>">
		    	</div>

			  	<div align="left" class="form-group">
			    	<label for="">PHOTOGRAPH&nbsp;</label><br>
			    	<input type="file" class="form-control-file" name="itemPhoto">
		    	</div><br>

			  	<div class="form-group">
			    	<input type="submit" id="submit123" name="sub" class="form-control" value="UPDATE"> <br>
                    <input type="reset" name="res" class="form-control" id="reset123" value="CLEAR">
		    	</div>
			</form>
		</div></center>
  	  </div>
  	</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="../js/Item-Insert-JS/jquery-3.4.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/Item-Insert-JS/popper.min.js"></script> 
<script src="../js/Item-Insert-JS/bootstrap-4.4.1.js"></script>

</body>
</html>