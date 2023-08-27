<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>Dashboard-MobilePlanet</title>
    <link rel="icon" href="../../assets/favicon-32x32.png" type="image/png">
</head>
<body>
    <?php include_once 'header.php'; ?>
    <div class="page-content">
    <div class="container-fluid tab-wrapper">
        <div class="row">
            <div class="col-md">
                    <div class="recent-sales-wrapper">
                        <div class="title">Recent Sales</div> 
                        <div class="body">
                            <table>
                                <thead>
                                    <th>Tran Id</th>
                                    <th>Date and Time</th>
                                    <th>Status</th>
                                    <th>More</th>
                                </thead>
                               <tbody>

                                <?php
                                    include_once '../../includes/dbConn.inc.php';
                                    $sql = "select * from transaction order by dateTime asc limit 10";
                                    $result = $conn->query($sql);
                                    if($result->num_rows >0){
                                        while($row = $result->fetch_assoc()){
                                            $str="";
                                            if($row["status"]==0){
                                                $str='<td class="btn-danger">Pending</td>';
                                            }else{
                                                 $str='<td class="btn-success">Dispatched</td>';
                                            }
                                            echo '
                                                     <tr>
                                                        <td>'.$row["tranId"].'</td>
                                                        <td>'.$row["dateTime"].'</td>'.$str.'
                                                        <td><a href="order-details.php?tran-id='.$row['tranId'].'">more</a></td>
                                                    </tr>
                                                ';
                                        }
                                    }
                                ?>
                            </tbody>
                            </table>
                            <a href="orders.php"><button type="button" class="btn btn-primary recent-sales-btn">See All</button></a>
                        </div> 
                    </div> 
            </div>
            <div class="col-md-5">
                    <div class="top-seling-wrapper">
                        <div class="title">Stock</div> 
                        <div class="body">
                            <table>
                            <?php
                                $sql1="select itemId,itemName,stock from item where stock <5 order by itemName asc";
                                $result1 = $conn->query($sql1);
                                if($result1->num_rows >0){
                                    while($row1 = $result1->fetch_assoc()){
                                        $str1 = '';
                                        if($row1['stock']<=0){
                                            $str1 = '<td class="btn-danger">'.$row1["stock"].'</td>';
                                        }else{
                                            $str1 = '<td class="btn-warning">'.$row1["stock"].'</td>';
                                        }
                                        echo '
                                            <tr>
                                                <td>'.$row1["itemName"].'</td>
                                                '.$str1.'
                                            </tr>
                                            ';
                                    }
                                }
                            ?>
                            </table>
                        </div>
                    </div> 
            </div>
        </div>
    </div>
</div>
</body>
</html>