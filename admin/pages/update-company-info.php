<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Company Info-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
    <!-- Bootstrap -->
	<link href="../css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="../css/update-company-info.css" rel="stylesheet" type="text/css">
    <link href="../css/headerAndSidebar.css" rel="stylesheet" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../js/Update-Company-Info-JS/update-company-info.js"></script>
  </head>
  <body>
        <?php
		    include_once 'header.php'
	    ?>
  

    <div class="container-fluid">
  	  <div class="container"><br><br><br>
        <center>
        <div class="jumbotron">
				<label class="l1" style="text-align:center;">UPDATE COMPANY INFO<br></label>

                <!-- Creating the form to update the company info-->
                <!-- The info already in the database will be displayed -->
                <?php
                    /*Connecting the database*/
                    include '../../includes/dbConn.inc.php';

                    /*Gathering the company info to an array*/
                    $getcom = "SELECT * FROM company WHERE companyId='1'";
                    $execom = $conn->query($getcom);
                    $row = mysqli_fetch_array($execom);
                ?>

  	      		<form name="companyInfoUpdate" method="post" action="update-company-info-query.php" onsubmit="return validateCompanyInfo()">
  	        		<div align="left" class="form-group"><br>
  	          			<label>COMPANY ADDRESS&nbsp;</label>
  	          			<input type="text" class="form-control" name="comAdd" value="<?php echo "$row[2]" ?>">
            		</div>
                    <br>
                    <div align="left" class="form-group">
  	          			<label>COMPANY TELEPHONE NUMBER&nbsp;</label>
  	          			<input type="text" class="form-control" name="comPhone" value="<?php echo "$row[3]"?>">
            		</div>
                    <br>
                    <div align="left" class="form-group">
  	          			<label>COMPANY OPENING TIMES&nbsp;</label>
  	          			<input type="text" class="form-control" name="comOpen" value="<?php echo "$row[4]"?>">
            		</div>
					<br>
  	        		<div class="form-group">
  	          			<input type="submit" id="submit123" name="sub3" class="form-control" value="UPDATE">
  	          			<br>
  	          			<input type="reset" name="res3" class="form-control" id="reset123" value="CLEAR">
            		</div>
          		</form>
  		</div>
        </center>
      </div>
  	</div>
		
  	<!-- body code goes here -->
	

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../../js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../../js/popper.min.js"></script> 
  <script src="../../js/bootstrap-4.4.1.js"></script>

  </body>
</html>