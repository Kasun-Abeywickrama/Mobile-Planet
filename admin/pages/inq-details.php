<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/inq-details.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Inquiry Details-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
</head>
<body>

<?php include_once 'header.php'; ?>

<div class="page-content"><center>

<?php 
    $inqId=$_REQUEST["inq-id"];
    
    
    include '../../includes/dbConn.inc.php';
    $sql= "SELECT * FROM inquiry where inqId = ".$inqId;

    $result = $conn->query($sql);

    $row = $result->fetch_assoc();

    $yn=$row["name"];
    $em=$row["email"];
    $in=$row["inquiry"];

    $sql1 = "UPDATE inquiry SET readed = 1 WHERE inqId = ".$inqId;
    $conn->query($sql1);
?>

   <div class="container-fluid">
    <div class="container">
    <h1>Inquiry Details</h1>
   
    <table>
  
    <tr><td><?php echo 'Inquiry ID :';?>
    <br><?php echo $inqId;?></td></tr>
    

    <tr><td><?php echo 'Email :';?>
    <br><?php echo $em;?></td></tr>

    
    <tr><td><?php echo 'Inquiry :';?>
    <br><?php echo $in;?></td></tr>
    </table>

</div>
</div>
</center></div>
</body>
</html>