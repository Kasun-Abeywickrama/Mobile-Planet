<?php
if(!$_POST['sKey']==""){
    include_once 'dbConn.inc.php';
    $query = "select * from item where itemName like '".$_POST['sKey']."%'";
    $result = mysqli_query($conn,$query);
    $str="";
    while($record = mysqli_fetch_assoc($result)){
        //$str .= $record['itemName']."<br>";
        $str .= '
        <div style="width: 100%; height: 30px;">
        <form action="Item-Page.php" method="post">
        <input type="hidden" name="item-id" value="'.$record['itemId'].'">
        <input type="hidden" name="item-name" value="'.$record['itemName'].'">
        <input type="hidden" name="item-price" value="'.$record['sellingPrice'].'">
        <button type="submit" name="submit" style="width: 100%; height: 30px; border: none; cursor: pointer; text-align: left;">'.$record['itemName'].'</button>
        </form>
        </div>
        ';
    }
    echo $str;
}
?>