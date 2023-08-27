<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Insert-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
    <!-- Bootstrap -->
	<link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="../css/Item-Insert.css" rel="stylesheet" type="text/css">
	<link href="../css/headerAndSidebar.css" rel="stylesheet" type="text/css">
	<script src="../js/Item-Insert-JS/Item-Insert-Validate.js"></script>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
	<?php
		include_once 'header.php'
	?>
    


  	<div class="container-fluid">
  	  <div class="container">
  	    <center>
            <br><br><br>
            <div class="jumbotron">
  	      	<label class="l1" style="text-align:center;">INSERT PRODUCT<br></label>
            
            <!-- Creating the form to insert the item details -->
            <!-- User must enter all the item details including the image file-->

		  	<form name="itemInsert" method="post" action="Item-Insert-Query.php" onsubmit="return validateItemInsert()" enctype="multipart/form-data">
			  	<div align="left" class="form-group">
			    	<label for="inputItemName">PRODUCT NAME&nbsp;</label>
			    	<input type="text" class="form-control" name="itemName" placeholder="Enter the product name">
				</div>
			  	<div align="left" class="form-group">
			    	<label for="inputItemType">Category&nbsp;</label>
			    	<select name="itemType" class="form-control" >
                        <option value="0">Select a Category</option>
						<?php
                            include_once '../../includes/dbConn.inc.php';
                            /* There is an Category table in the database, it contains categoryID and categoryName. First we get all the categoryIDs and category names from the database.
                            Then, we will display them as options in this select tag */
                            $sel1 = "select categoryId, categoryName from category";
                            $exe1 = $conn->query($sel1);
                            while($row1 = mysqli_fetch_array($exe1))
                            {
                                echo "<option value='$row1[0]'>$row1[1]</option>";
                            }
                        ?>
				  	</select>
		    	</div>
                <div align="left" class="form-group">
			    	<label for="inputBrandType">BRAND&nbsp;</label>
			    	<select name="itemBrand" class="form-control" >
                        <option value="0">Select a Brand</option>
						<?php
                            /* There is an brand table in the database, it contains brandID and brandName. First we get all the brandIDs and brand names from the database.
                            Then, we will display them as options in this select tag */
                            $sel2 = "select brandId, brandName from brand";
                            $exe2 = $conn->query($sel2);
                            while($row2 = mysqli_fetch_array($exe2))
                            {
                                echo "<option value='$row2[0]'>$row2[1]</option>";
                            }
                        ?>
				  	</select>
		    	</div>
			  
		    	<div align="left" class="form-group">
			    	<label for="inputItemDesc">DESCRIPTION&nbsp;</label><br>
			    	<textarea class="form-control" name="itemDescription" cols="65" rows="8" placeholder="Enter the description of the product" ></textarea>
			    
	        	</div>
			  
				<div align="left" class="form-group">
					<label for="inputSellingPrice">SELLING PRICE (Rs)&nbsp;</label>
					<input type="text" class="form-control" name="itemSellingPrice" placeholder="Enter the product selling price">
				</div>
				
				<div align="left" class="form-group">
					<label for="inputBuyingPrice">BUYING PRICE (Rs)&nbsp;</label>
					<input type="text" class="form-control" name="itemBuyingPrice" placeholder="Enter the product buying price">
				</div>
				<div align="left" class="form-group">
					<label for="">PHOTOGRAPH&nbsp;</label><br>
					<input type="file" class="form-control-file" name="itemPhoto">
				</div><br>
				<div class="form-group">
					<input type="submit" id="submit123" name="sub" class="form-control" value="ENTER"> <br>
                    <input type="reset" name="res" class="form-control" id="reset123" value="CLEAR">
				</div>
			</form>
			<br>
			</div>



			<div class="jumbotron">
				<label class="l1" id="updatelabel1" style="text-align:center;">UPDATE PRODUCT<br></label>

                <!-- Creating the form for the user to edit the item Details stored in the database-->
                <!-- User must enter the item Name of the item that must be updated-->

  	      		<form name="itemUpdateName" method="post" action="Item-Update.php">
  	        		<div align="left" class="form-group">
  	          			<label for="inputItemName">PRODUCT NAME&nbsp;</label>
  	          			<input type="text" class="form-control" name="upName" placeholder="Enter the product Name">
            		</div>
					<br>
  	        		<div class="form-group">
  	          			<input type="submit" id="submit123" name="sub2" class="form-control" value="UPDATE">
  	          			<br>
  	          			<input type="reset" name="res2" class="form-control" id="reset123" value="CLEAR">
            		</div>
          		</form>
  			</div><br>



			<div class="jumbotron">
				<label class="l1" id="deletelabel1" style="text-align:center;">DELETE PRODUCT<br></label>

                <!-- Creating the form for the user to delete an item from the database-->
                <!-- User must enter the item Name of the item that must be deleted-->

  	      		<form name="itemDeleteName" method="post" action="Item-Delete-Query.php">
  	        		<div align="left" class="form-group">
  	          			<label for="inputItemName1">PRODUCT NAME&nbsp;</label>
  	          			<input type="text" class="form-control" name="delName" placeholder="Enter the product Name">
            		</div>
					<br>
  	        		<div class="form-group">
  	          			<input type="submit" id="submit123" name="sub3" class="form-control" value="DELETE">
  	          			<br>
  	          			<input type="reset" name="res3" class="form-control" id="reset123" value="CLEAR">
            		</div>
          		</form>
  			</div>


		</div></center>
  	</div>
		
  	<!-- body code goes here -->
	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/Item-Insert-JS/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/Item-Insert-JS/popper.min.js"></script> 
  <script src="../js/Item-Insert-JS/bootstrap-4.4.1.js"></script>

  </body>
</html>