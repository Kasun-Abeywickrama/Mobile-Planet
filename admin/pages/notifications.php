<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="../css/headerAndSidebar.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <link rel="stylesheet" href="../css/notifications.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include_once 'header.php'; ?>
    <div class="page-content">
        <div class="container-fluid">
  	  <div class="row">
  	    <div class="col-md-6"><h5>Orders</h5>
  	      <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Date & Time</th>
                            <th>More Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include_once '../../includes/dbConn.inc.php';
                            $sql = "select * from transaction where status = 0";
                            $result = $conn->query($sql);
                            if($result->num_rows >0){
                                while($row = $result->fetch_assoc()){
                                    echo '<tr>
                                            <td>'.$row['tranId'].'</td>
                                            <td>'.$row['dateTime'].'</td>
                                            <td><a href="order-details.php?tran-id='.$row['tranId'].'">More</a></td>
                                          </tr>
                                    ';
                                }
                            } 
                        ?>
                    </tbody>
                </table>
            </div>
  	    </div>
  	    <div class="col-md-6"><h5>Inquiries</h5>
		    <div class="container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>More Details</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php
                            $sql1 = "select * from inquiry where readed = 0";
                            $result1 = $conn->query($sql1);
                            if($result1->num_rows >0){
                                while($row1 = $result1->fetch_assoc()){
                                    echo '<tr>
                                            <td>'.$row1['inqId'].'</td>
                                            <td>'.$row1['email'].'</td>
                                            <td><a href="inq-details.php?inq-id='.$row1['inqId'].'">More</a></td>
                                          </tr>
                                    ';
                                }
                            } 
                ?>
                    </tbody>
                </table>
            </div>
		  </div>
      </div>
  	</div>
    </div>
</body>
</html>