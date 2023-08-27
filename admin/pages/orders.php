<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">

    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/order.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <?php include_once 'header.php'; ?>
    <div class="page-content">
        <br>
        <h3>PENDING ORDERS</h3><br>
        <center>
            <table>
                <tr>
                    <th>Tran Id</th>
                    <th>Date & Time</th>
                    <th>Username</th>
                    <th>More details</th>
                </tr>
                <?php
                    include_once '../../includes/dbConn.inc.php';
                    $sql = "select * from transaction where status = 0";
                    $result = $conn->query($sql);
                    if($result->num_rows >0){
                        while($row = $result->fetch_assoc()){
                                $sql2 = "select userName from user where userId = ".$row['userId'];
                                $result2 = $conn->query($sql2);
                                $row2 = $result2->fetch_assoc();
                                echo '
                                        <tr>
                                            
                                                <td>'.$row['tranId'].'</td>
                                                <td>'.$row['dateTime'].'</td>
                                                <td>'.$row2['userName'].'</td>
                                                <td class="moredetails"><a href="order-details.php?tran-id='.$row['tranId'].'">more</a></td>
                                        </tr>
                                    ';
                        }
                    }
                ?>
            </table></center><br><br><br>
        <h3>DELIVERED ORDERS</h3><br>
        <center>
        <table>
                <tr>
                    <th>Tran Id</th>
                    <th>Date & Time</th>
                    <th>Username</th>
                    <th>More details</th>
                </tr>
                <?php
                    include_once '../../includes/dbConn.inc.php';
                    $sql = "select * from transaction where status = 1";
                    $result = $conn->query($sql);
                    if($result->num_rows >0){
                        while($row = $result->fetch_assoc()){
                                $sql2 = "select userName from user where userId = ".$row['userId'];
                                $result2 = $conn->query($sql2);
                                $row2 = $result2->fetch_assoc();
                                echo '
                                        <tr>
                                            
                                                <td>'.$row['tranId'].'</td>
                                                <td>'.$row['dateTime'].'</td>
                                                <td>'.$row2['userName'].'</td>
                                                <td class="moredetails"><a href="order-details.php?tran-id='.$row['tranId'].'">more</a></td>
                                        </tr>
                                    ';
                        }
                    }
                ?>
            </table></center><br>
    </div>
</body>
</html>