<?php

    include_once '../../includes/dbConn.inc.php';
    $query = "select itemName,stock,buyingPrice,sellingPrice from item where itemName like '".$_POST['sKey']."%' order by itemName asc";
    $result = mysqli_query($conn,$query);
    $str="";
    while($record = mysqli_fetch_assoc($result)){
        $str .= '
        <div style="display:flex; margin-bottom:10px; margin-left:200px;">
            <div style="width:350px">'.$record['itemName'].'</div>
            <div style="width:100px">'.$record['stock'].'</div>
            <div style="width:100px">'.$record['buyingPrice'].'</div>
            <div style="width:100px">'.$record['sellingPrice'].'</div>
        </div>
        ';
    }
    echo $str;

?>