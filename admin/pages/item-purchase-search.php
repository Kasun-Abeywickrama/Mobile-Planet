<?php
if(!$_POST['sKey']==""){
    include_once '../../includes/dbConn.inc.php';
    $query = "select * from item where itemName like '".$_POST['sKey']."%'";
    $result = mysqli_query($conn,$query);
    $str="";
    while($record = mysqli_fetch_assoc($result)){
        $id = $record['itemId'];
        $nm = $record['itemName'];
        $bp = $record['buyingPrice'];
        $sp = $record['sellingPrice'];
        $str .= '
        <div style="width: 100%; height: 30px;">
        <input type="hidden" name="item-name" value="'.$record['itemName'].'">
        <input type="hidden" name="item-price" value="'.$record['sellingPrice'].'">
        <button name="submit" style="width: 100%; height: 30px; border: none; cursor: pointer; text-align: left;" onclick="saveTemp('.$id.',\''.$nm.'\','.$bp.','.$sp.');">'.$record['itemName'].'</button>
        </div>
        ';
    }
    echo $str;
}
?>