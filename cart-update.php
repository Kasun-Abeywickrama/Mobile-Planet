<?php
include_once 'includes/dbConn.inc.php';
echo $_REQUEST['item-id'];
echo $_REQUEST['cw-id'];
echo $_REQUEST['qty'];
if($_REQUEST['qty']==0){
    $sqld = 'delete from itemcartwishlist where itemId = '.$_REQUEST['item-id'].' and cwId = '.$_REQUEST['cw-id'];
     if($conn->query($sqld) == false){
        echo 'Delete unsuccessful '.$conn->error;
    }else{
         echo '<script>alert("Item delete Successful");</script>';
    }
}
else{
    $sql = 'update itemcartwishlist set cartQuantity = '.$_REQUEST['qty'].' where itemId = '.$_REQUEST['item-id'].' and cwId = '.$_REQUEST['cw-id'];
    if($conn->query($sql) == false){
        echo 'Error '.$conn->error;
    }else{
         echo '<script>alert("Update Successful");</script>';
    }
}
 echo "<script>window.location.replace('cart.php')</script>";
?>