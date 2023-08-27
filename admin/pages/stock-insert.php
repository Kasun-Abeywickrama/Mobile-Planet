<?php
     include_once '../../includes/dbConn.inc.php';
     $qt = $_POST['qty'];
     $bp = $_POST['b-price'];
     $sp = $_POST['s-price'];
     $sqlst = "select stock from item where itemId = ".$_POST['item-id'];
     $resltst = $conn->query($sqlst);
     $rowst = $resltst->fetch_assoc();
     $totQty = $rowst['stock']+$qt;
     $sql = "update item set stock=".$totQty.",buyingPrice = ".$bp.",sellingPrice = ".$sp." where itemId = ".$_POST['item-id'];
    if($conn->query($sql) == true){
        echo '<script>alert("Stock Update Successful");</script>';
        echo "<script>window.location.replace('item-purchase.php')</script>";
    }else{
        echo 'error'.$conn->error;
    }
?>