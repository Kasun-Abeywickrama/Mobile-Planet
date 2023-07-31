
<?php
	if(!isset($_POST['submit'])){
        header("Location: index.php?error=error");
	}
?>

<html>
<head>
	 
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/item-page.css" rel="stylesheet" type="text/css">
	<link href="css/HeaderAndFooter.css" rel="stylesheet" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
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
				<img src="images/3bdb30282097d830da87081dd044f6fd.jpg" class="img-fluid rounded" alt="Placeholder image">
	          
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
                    <div class="card-body">Display Technology: Dynamic AMOLED 2X
<br>Nano-SIM (4FF),Embedded-SIM
<br>Battery Capacity (mAh, Typical) : 4500
<br>Processor: CPU Speed :- 2.73GHz,2.5GHz,2GHz CPU Type:- Octa-Core
<br>Dimension (HxWxD, mm): 161.9 x 73.7 x 7.8
<br>Weight (g): 186
<br>8GB RAM, <br>External Memory SupportMicroSD (Up to 1TB)
<br>Android</div>
                  </div>
                </div>
                
               
                
              </div>
              <p><br>
                <a class="btn btn-primary btn-lg" href="#" role="button" id="b1">Buy</a> &nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary btn-lg" href="#" role="button" id="b2">Add to Cart</a></p>
              
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