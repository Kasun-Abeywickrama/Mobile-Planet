<html>
<head>
	 
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/item-page.css" rel="stylesheet" type="text/css">
	<link href="css/headerAndFooter.css" rel="stylesheet" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
    <script>
        function validateQTY()
        {
            if(document.validateCart.qty.value == "")
            {
                alert("Please enter a Quantity");
            }
        }
    </script>
</head>
<body>
<!-- body code goes here -->
	<?php 
		include_once 'header.php'
	?>


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/Item-Page-JS/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/Item-Page-JS/popper.min.js"></script> 
	<div class="container-fluid" id="wrapper1">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-6">
	        <div class="jumbotron">
                <?php
                    echo '
                    		<img src="assets/ProductImages//'.$_POST['item-id'].'.png" class="img-fluid rounded" alt="Placeholder image" style="width:100%;">
                    ';
                ?>
            </div>
</div>
	      <div class="col-lg-6">
	        <div class="jumbotron">
	          <h1 class="display-4"><?php echo $_POST['item-name']; ?></h1>
	          <h1 class="display-41"><?php echo $_POST['item-price']; ?></h1>

	          
              <div id="accordion1" role="tablist">
                <div class="card">
                  <div class="card-header" role="tab" id="headingOne1">
                    <h5 class="mb-0"> <a data-toggle="collapse" href="#collapseOne1" role="button" aria-expanded="true" aria-controls="collapseOne1"> Description</a> </h5>
                  </div>
                  <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordion1">
                    <div class="card-body">
                        <?php 
                            include 'includes/dbConn.inc.php';
                            $itemID = $_POST["item-id"];
                            $sel1 = "SELECT description FROM item WHERE itemId = '$itemID'";
                            $exe1 = $conn->query($sel1);
                            while($row = mysqli_fetch_array($exe1))
                            {
                                echo "$row[0]";
                            }
                        ?>
                  </div>
                </div>
                
               
                
              </div>
              <p><br>
				<form name="validateCart" action="Cart-Update-Query.php" method="post" onsubmit="validateQty();">
					Qty: &nbsp; &nbsp; <input type="text" name="qty" id="qty"><br><br>
					<input type="hidden" name="item-id" value="<?php echo $_POST['item-id'];?>">
                    <input type="submit" class="btn btn-primary btn-lg"  id="b2" name="sub" value="Add to Cart">
				</form>
                </p>
            </div>
</div>
        </div>

	  </div>
	</div>
	<?php 
		include_once 'footer.php'
	?>

	<script src="js/Item-Page-JS/bootstrap-4.4.1.js"> </script>
	<script src="js/Item-Page-JS/jquery-3.4.1.min.js"></script>
	<script src="js/Item-Page-JS/popper.min.js"></script>
                       
</html>